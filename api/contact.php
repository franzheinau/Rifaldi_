<?php
$pageTitle  = "Contact - Portfolio Saya";
$activePage = "contact";
include __DIR__ . '/../includes/header.php';

// baca status dari URL (?status=...)
$status = $_GET['status'] ?? null;
?>
<a id="top"></a>
<h2>Contact</h2>

<p>
    Untuk kerja sama atau pertanyaan, kamu bisa menghubungi saya 
    lewat email atau form sederhana di bawah ini.
</p>

<?php if ($status === 'ok'): ?>
    <p style="color: green; margin-top: 5px;">
        Pesan berhasil dikirim. Terima kasih! 😊
    </p>
<?php elseif ($status === 'empty'): ?>
    <p style="color: red; margin-top: 5px;">
        Semua field wajib diisi.
    </p>
<?php elseif ($status === 'fail'): ?>
    <p style="color: red; margin-top: 5px;">
        Gagal mengirim pesan. Coba lagi beberapa saat, atau kirim email langsung.
    </p>
<?php endif; ?>

<div class="contact-layout">
    <div class="contact-info-box">
        <h3>Info Kontak</h3>
        <p>Email: <a href="mailto:rifaldi0823666@gmail.com">rifaldi0823666@gmail.com</a></p>
        <p>GitHub: <a href="https://github.com/franzheinau" target="_blank">github.com/franzheinau</a></p>
        <p>stackoverflow <a href="https://stackoverflow.com/users/32024670/kr%c3%b6ner-hass" target="_blank">Korner: stackoverflow</a></p>
    </div>

    <div class="contact-form-box">
        <h3>Form Kontak</h3>
        <form method="POST" action="<?= $baseURL ?>/api/send.php">
            <label for="name">Nama:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Pesan:</label>
            <textarea id="message" name="message" rows="4" required></textarea>

            <button type="submit">Kirim Pesan</button>
        </form>
    </div>
</div>

<?php
include __DIR__ . '/../includes/footer.php';
