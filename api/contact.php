<?php
$pageTitle  = "Contact - Portfolio Rifaldi";
$activePage = "contact";
include __DIR__ . '/../includes/header.php';

$status = $_GET['status'] ?? null;
?>

<div class="section-title">CONTACT</div>

<div class="section-card" style="margin-bottom:16px;">
    <p>Untuk kerja sama atau pertanyaan, kamu bisa menghubungi saya lewat email atau form di bawah ini.</p>
</div>

<?php if ($status === 'ok'): ?>
<div class="status-msg status-ok">▸ Pesan berhasil dikirim. Terima kasih!</div>
<?php elseif ($status === 'empty'): ?>
<div class="status-msg status-err">▸ Semua field wajib diisi.</div>
<?php elseif ($status === 'fail'): ?>
<div class="status-msg status-err">▸ Gagal mengirim pesan. Coba lagi atau kirim email langsung.</div>
<?php endif; ?>

<div class="contact-layout">
    <div class="contact-info-box">
        <h3>▸ INFO KONTAK</h3>
        <div class="contact-info-row">
            <span class="contact-label">EMAIL</span>
            <a href="mailto:rifaldi0823666@gmail.com">rifaldi0823666@gmail.com</a>
        </div>
        <div class="contact-info-row">
            <span class="contact-label">GITHUB</span>
            <a href="https://github.com/franzheinau" target="_blank">github.com/franzheinau</a>
        </div>
        <div class="contact-info-row">
            <span class="contact-label">STACK</span>
            <a href="https://stackoverflow.com/users/32024670/kr%c3%b6ner-hass" target="_blank">stackoverflow/kroner</a>
        </div>
        <div class="contact-status-box">
            <span class="online-dot"></span>
            <span>STATUS: OPEN FOR COLLAB</span>
        </div>
    </div>

    <div class="contact-form-box">
        <h3>▸ FORM KONTAK</h3>
        <form method="POST" action="/api/send.php">
            <div class="form-group">
                <label for="name">NAMA</label>
                <input type="text" id="name" name="name" placeholder="Nama kamu..." required>
            </div>
            <div class="form-group">
                <label for="email">EMAIL</label>
                <input type="email" id="email" name="email" placeholder="email@kamu.com" required>
            </div>
            <div class="form-group">
                <label for="message">PESAN</label>
                <textarea id="message" name="message" rows="4" placeholder="Tulis pesanmu di sini..." required></textarea>
            </div>
            <button type="submit" class="btn-primary" style="margin-top:4px;">▶ KIRIM PESAN</button>
        </form>
    </div>
</div>

<?php include __DIR__ . '/../includes/footer.php'; ?>