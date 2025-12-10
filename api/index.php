<?php
$pageTitle  = "Home - Portfolio Saya";
$activePage = "home";
include __DIR__ . '/../includes/header.php';
$nama = "Rifaldi";
?>


<div class="hero-section">
    <img src="https://ik.imagekit.io/3fgrgeqi6z/sayapixeol2.jpg" class="hero-photo" alt="Foto Saya">


    <div class="hero-text">
        <p class="hero-label">Web Developer • Write Code Enthusiast</p>
        <h2>Halo, saya <?php echo $nama; ?> </h2>
        <p>
            Selamat datang di portfolio pribadi saya.  
            Saya suka membangun website sederhana, rapi, dan mudah dipahami —
            terinspirasi dari gaya website klasik.
        </p>

        <div class="hero-actions">
            <a href="/projects" class="btn-primary">Lihat Projects</a>
            <a href="/about" class="btn-ghost">Tentang saya</a>
        </div>

        <ul class="hero-list">
            <li>Fokus pada web sederhana & cepat diakses.</li>
            <li>Suka eksplorasi PHP dan Go.</li>
            <li>Belajar konsisten dan menulis kode yang rapi.</li>
        </ul>
    </div>
</div>

<h2>Selamat datang</h2>
<p>
    Ini adalah website portfolio <?php echo $nama; ?>.  
    Di sini kamu bisa melihat halaman <strong>About</strong>, <strong>Projects</strong>, dan <strong>Contact</strong>.
</p>

<div class="home-columns">
    <div class="section-card">
        <h3>Ringkasan Singkat</h3>
        <p>
            Saya memulai belajar web dari dasar: HTML, CSS, dan PHP native.
            Tujuan saya adalah memahami konsep fundamental sebelum pindah ke framework yang lebih berat.
        </p>
        <p>
            Saya percaya bahwa website yang baik tidak harus rumit — yang penting fungsinya jelas,
            tampilannya rapi, dan nyaman digunakan.
        </p>
    </div>

    <div class="section-card home-info-card">
        <h3>Info Diri</h3>
        <table class="info-table">
            <tr>
                <th>Nama :</th>
                <td><?php echo $nama; ?>;</td>
            </tr>
            <tr>
                <th>Fokus :</th>
                <td>Web Development (PHP &amp; basic JS;)</td>
            </tr>
            <tr>
                <th>Domisili :</th>
                <td>Indonesia</td>
            </tr>
            <tr>
                <th>Tujuan :</th>
                <td>Pengalaman nyata;</td>
            </tr>
        </table>
    </div>
</div>

<div class="section-card tech-section">
    <h3>Tech Stack yang sering saya pakai</h3>
    <div class="badge-row">
        <span class="badge">PHP</span>
        <span class="badge">HTML</span>
        <span class="badge">CSS </span>
        <span class="badge">JavaScript </span>
        <span class="badge">Go </span>
        <span class="badge">C++ </span>
    </div>
</div>

<?php include __DIR__ . '/../includes/footer.php'; ?>
