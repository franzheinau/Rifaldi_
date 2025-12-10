<?php

header("Content-Type: application/json");

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    echo json_encode(["error" => "Invalid request"]);
    exit;
}

$name    = trim($_POST["name"] ?? "");
$email   = trim($_POST["email"] ?? "");
$message = trim($_POST["message"] ?? "");

if ($name === "" || $email === "" || $message === "") {
    echo json_encode(["error" => "Semua field harus diisi."]);
    exit;
}

// Email tujuan (GANTI dengan email kamu)
$to = "rifaldi0823666@gmail.com";

// Subjek email
$subject = "Pesan baru dari portfolio: $name";

// Isi email
$body = "Nama: $name\nEmail: $email\n\nPesan:\n$message";

// Header email
$headers = "From: $email";

if (mail($to, $subject, $body, $headers)) {
    echo json_encode(["success" => true, "message" => "Pesan berhasil dikirim!"]);
} else {
    echo json_encode(["error" => "Gagal mengirim email. Server mungkin memblokir mail()."]);
}
