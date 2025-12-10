<?php
$pageTitle  = "Contact - Portfolio Saya";
$activePage = "contact";
include __DIR__ . '/../includes/header.php';
?>
<a id="top"></a>
<h2>Contact</h2>

<p>
    Untuk kerja sama atau pertanyaan, kamu bisa menghubungi saya 
    lewat email atau form sederhana di bawah ini.
</p>

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
            <input type="text" id="name" name="name">

            <label for="email">Email:</label>
            <input type="email" id="email" name="email">

            <label for="message">Pesan:</label>
            <textarea id="message" name="message" rows="4"></textarea>

            <button type="submit">Kirim Pesan</button>
        </form>
    </div>
</div>

<?php
include __DIR__ . '/../includes/footer.php';
