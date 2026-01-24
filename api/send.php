<?php
// Deteksi base URL (localhost vs hosting)
$baseURL = "";
if (strpos($_SERVER['HTTP_HOST'], 'localhost') !== false) {
    $baseURL = "/portfolio-rifaldi";
}

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: " . $baseURL . "/contact?status=fail");
    exit;
}

$name    = trim($_POST["name"] ?? "");
$email   = trim($_POST["email"] ?? "");
$message = trim($_POST["message"] ?? "");

if ($name === "" || $email === "" || $message === "") {
    header("Location: " . $baseURL . "/contact?status=empty");
    exit;
}

// ✅ Validasi email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: " . $baseURL . "/contact?status=invalid_email");
    exit;
}

require __DIR__ . '/../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

try {
    // ✅ SMTP Config
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;

    // 🔥 GANTI sesuai email kamu
    $mail->Username   = 'rifaldi0823666@gmail.com';

    // 🔥 ISI App Password Gmail (bukan password biasa)
    $mail->Password   = 'ISI_APP_PASSWORD_DISINI';

    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    // ✅ Pengirim (harus sama dengan Username biar aman dari blokir)
    $mail->setFrom('rifaldi0823666@gmail.com', 'Portfolio Rifaldi');

    // ✅ Kalau mau, email user ditaruh sebagai replyTo biar bisa dibalas
    $mail->addReplyTo($email, $name);

    // ✅ Penerima (email kamu sendiri)
    $mail->addAddress('rifaldi0823666@gmail.com');

    // ✅ Konten email
    $mail->isHTML(true);
    $mail->Subject = "Pesan baru dari portfolio: $name";

    $mail->Body = "
        <h3>Pesan Baru dari Portfolio</h3>
        <p><b>Nama:</b> {$name}</p>
        <p><b>Email:</b> {$email}</p>
        <p><b>Pesan:</b><br>" . nl2br(htmlspecialchars($message)) . "</p>
    ";

    $mail->AltBody = "Nama: $name\nEmail: $email\n\nPesan:\n$message";

    $mail->send();

    header("Location: " . $baseURL . "/contact?status=ok");
    exit;

} catch (Exception $e) {
    // kalau mau debugging bisa echo $mail->ErrorInfo;
    header("Location: " . $baseURL . "/contact?status=fail");
    exit;
}
