<?php
// Deteksi base URL (localhost vs Vercel)
$baseURL = "";
if (strpos($_SERVER['HTTP_HOST'], 'localhost') !== false) {
    // GANTI sesuai nama folder project-mu di htdocs
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

// Email tujuan (GANTI kalau mau)
$to = "rifaldi0823666@gmail.com";

$subject = "Pesan baru dari portfolio: $name";
$body    = "Nama: $name\nEmail: $email\n\nPesan:\n$message";
$headers = "From: $email";

$sent = @mail($to, $subject, $body, $headers);

if ($sent) {
    header("Location: " . $baseURL . "/contact?status=ok");
} else {
    header("Location: " . $baseURL . "/contact?status=fail");
}
exit;
