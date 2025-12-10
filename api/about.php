<?php
$pageTitle  = "About - Portfolio Saya";
$activePage = "about";
$nama = "Rifaldi";
include __DIR__ . '/../includes/header.php';
?>
<a id="top"></a>
<h2>About Me</h2>

<p>
    Halo, nama saya <?php echo $nama; ?>. Saya mulai belajar pemrograman web dengan 
    PHP native, HTML, dan CSS yang sederhana, seperti website-website 
    lama di awal tahun 2000-an.
</p>

<p>
    Saya suka tampilan yang jelas, warna lembut, dan layout yang simpel 
    tanpa terlalu banyak animasi. Fokus saya adalah fungsi jalan dulu, 
    tampilan rapi dan gampang dipahami.
</p>

<table class="info-table">
    <tr>
        <th>Nama</th>
        <td>[Nama Kamu]</td>
    </tr>
    <tr>
        <th>Fokus</th>
        <td>Web Development</td>
    </tr>
    <tr>
        <th>Bahasa</th>
        <td>Indonesia, Inggris (basic)</td>
    </tr>
</table>

<?php
include __DIR__ . '/../includes/footer.php';
