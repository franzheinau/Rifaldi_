<?php
$pageTitle  = "About - Portfolio Rifaldi";
$activePage = "about";
$nama       = "Rifaldi";
include __DIR__ . '/../includes/header.php';
?>

<div class="section-title">ABOUT ME</div>

<div class="hero-section" style="margin-bottom:16px;">
    <div class="hero-photo-wrap">
        <img src="https://ik.imagekit.io/3fgrgeqi6z/sayapixeol2.jpg" class="hero-photo" alt="Foto <?= $nama ?>">
        <div class="hp-bar"><div class="hp-fill"></div></div>
        <div class="hp-label">HP ████████░░ 85%</div>
    </div>
    <div class="hero-text">
        <div class="hero-role">▸ Player Profile</div>
        <h2 class="hero-name"><?= strtoupper($nama) ?></h2>
        <p class="hero-bio">
            Halo! Saya mulai belajar pemrograman web dengan PHP native, HTML, dan CSS sederhana —
            seperti website-website lama di awal tahun 2000-an.
        </p>
        <p class="hero-bio" style="margin-top:8px;">
            Fokus saya adalah fungsi jalan dulu, tampilan rapi dan gampang dipahami.
            Saya suka tampilan yang jelas dan layout simpel tanpa terlalu banyak animasi.
        </p>
    </div>
</div>

<div class="home-columns">
    <div class="section-card">
        <h3>▸ PLAYER STATS</h3>
        <table class="info-table">
            <tr><th>NAMA</th>     <td><?= $nama ?></td></tr>
            <tr><th>FOKUS</th>    <td>Web Development</td></tr>
            <tr><th>BAHASA</th>   <td>Indonesia, Inggris (basic)</td></tr>
            <tr><th>DOMISILI</th> <td>Indonesia</td></tr>
            <tr><th>STATUS</th>   <td style="color:#3dbcb0;">● AKTIF BELAJAR</td></tr>
        </table>
    </div>

    <div class="section-card">
        <h3>▸ QUEST LOG</h3>
        <ul class="hero-list" style="margin-top:4px;">
            <li>Belajar PHP native dari nol</li>
            <li>Memahami fundamental HTML & CSS</li>
            <li>Eksplorasi Go untuk backend</li>
            <li>Membangun portfolio ini</li>
            <li style="color:var(--lavender);">[ ] Deploy project pertama ke production</li>
        </ul>
    </div>
</div>

<div class="section-title">SKILL TREE</div>

<div class="section-card">
    <h3>▸ EXPERIENCE POINTS</h3>
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
</div>

<?php include __DIR__ . '/../includes/footer.php'; ?>