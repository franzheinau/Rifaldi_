<?php
$pageTitle  = "Home - Portfolio Rifaldi";
$activePage = "home";
include __DIR__ . '/../includes/header.php';
$nama = "Rifaldi";
?>

<!-- Live Clock -->
<div class="section-card" style="margin-bottom:14px; border-color: var(--sunset2);">
    <div class="pixel-clock" id="clock">--:--:--</div>
    <div class="pixel-date"  id="dateline">Loading...</div>
</div>

<!-- Hero -->
<div class="hero-section">
    <div class="hero-photo-wrap">
        <img src="https://ik.imagekit.io/3fgrgeqi6z/sayapixeol2.jpg" class="hero-photo" alt="Foto <?php echo $nama; ?>">
        <div class="hp-bar"><div class="hp-fill"></div></div>
        <div class="hp-label">HP ████████░░ 85%</div>
    </div>
    <div class="hero-text">
        <div class="hero-role">▸ Web Dev &nbsp;▸ Code Enthusiast</div>
        <h2 class="hero-name">HALO, SAYA <?php echo strtoupper($nama); ?></h2>
        <p class="hero-bio">
            Selamat datang di portfolio saya.
            Saya suka membangun website sederhana, rapi, dan mudah dipahami —
            terinspirasi dari gaya website klasik &amp; estetika pixel.
        </p>
        <div class="hero-actions">
            <a href="/projects" class="btn-primary">▶ LIHAT PROJECTS</a>
            <a href="/about"    class="btn-ghost">◈ TENTANG SAYA</a>
        </div>
        <ul class="hero-list">
            <li>Fokus pada web sederhana &amp; cepat diakses</li>
            <li>Suka eksplorasi PHP dan Go</li>
            <li>Belajar konsisten &amp; menulis kode yang rapi</li>
        </ul>
    </div>
</div>

<div class="section-title">SELAMAT DATANG</div>

<div class="home-columns">
    <div class="section-card">
        <h3>▸ RINGKASAN SINGKAT</h3>
        <p>
            Saya memulai belajar web dari dasar: HTML, CSS, dan PHP native.
            Tujuan saya adalah memahami konsep fundamental sebelum pindah ke
            framework yang lebih berat.
        </p>
        <br>
        <p>
            Website yang baik tidak harus rumit — yang penting fungsinya jelas,
            tampilannya rapi, dan nyaman digunakan.
        </p>
    </div>

    <div class="section-card">
        <h3>▸ INFO DIRI</h3>
        <table class="info-table">
            <tr><th>NAMA</th>     <td><?php echo $nama; ?></td></tr>
            <tr><th>FOKUS</th>    <td>Web Dev (PHP &amp; JS)</td></tr>
            <tr><th>DOMISILI</th> <td>Indonesia</td></tr>
            <tr><th>TUJUAN</th>   <td>Pengalaman Nyata</td></tr>
            <tr><th>STATUS</th>   <td style="color:#3dbcb0;">● AKTIF BELAJAR</td></tr>
        </table>
    </div>
</div>

<div class="section-title">TECH STACK</div>

<div class="section-card">
    <h3>▸ SKILL &amp; EXPERIENCE POINTS</h3>
    <div style="margin-top:10px;">
        <div class="exp-row">
            <span class="exp-name">PHP</span>
            <div class="exp-track"><div class="exp-fill" style="width:80%;--fill-color:#b57bee;"></div></div>
            <span class="exp-pct">80 XP</span>
        </div>
        <div class="exp-row">
            <span class="exp-name">HTML</span>
            <div class="exp-track"><div class="exp-fill" style="width:90%;--fill-color:#e8633a;"></div></div>
            <span class="exp-pct">90 XP</span>
        </div>
        <div class="exp-row">
            <span class="exp-name">CSS</span>
            <div class="exp-track"><div class="exp-fill" style="width:85%;--fill-color:#3dbcb0;"></div></div>
            <span class="exp-pct">85 XP</span>
        </div>
        <div class="exp-row">
            <span class="exp-name">JS</span>
            <div class="exp-track"><div class="exp-fill" style="width:65%;--fill-color:#f5c842;"></div></div>
            <span class="exp-pct">65 XP</span>
        </div>
        <div class="exp-row">
            <span class="exp-name">GO</span>
            <div class="exp-track"><div class="exp-fill" style="width:55%;--fill-color:#64c8f5;"></div></div>
            <span class="exp-pct">55 XP</span>
        </div>
        <div class="exp-row">
            <span class="exp-name">C++</span>
            <div class="exp-track"><div class="exp-fill" style="width:45%;--fill-color:#e84d8a;"></div></div>
            <span class="exp-pct">45 XP</span>
        </div>
    </div>
    <div class="badge-row" style="margin-top:14px;">
        <span class="badge badge-php">PHP</span>
        <span class="badge badge-html">HTML</span>
        <span class="badge badge-css">CSS</span>
        <span class="badge badge-js">JAVASCRIPT</span>
        <span class="badge badge-go">GO</span>
        <span class="badge badge-cpp">C++</span>
    </div>
</div>

<?php include __DIR__ . '/../includes/footer.php'; ?> 