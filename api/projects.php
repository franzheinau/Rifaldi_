<?php
$pageTitle  = "Projects - Portfolio Saya";
$activePage = "projects";
include __DIR__ . '/../includes/header.php';

// contoh data project (boleh diambil dari DB juga nanti)
$projects = [
    [
        'name' => 'Profile Komunitas Baca',
        'year' => '2023',
        'desc' => 'Website profil Komunitas Kecil, tampilan sederhana dengan beberapa halaman statis.',
        'link' => 'https://www.pthreesmada.my.id/'
    ],

];
?>
<a id="top"></a>
<h2>Projects</h2>

<p>
    Berikut beberapa project yang pernah saya kerjakan. Sebagian masih 
    sederhana, tapi cukup untuk menunjukkan proses belajar saya.
</p>

<div class="project-list">
    <?php foreach ($projects as $project): ?>
        <div class="project-item">
            <h3><?= htmlspecialchars($project['name']) ?></h3>
            <p class="project-year">Tahun: <?= htmlspecialchars($project['year']) ?></p>
            <p><?= htmlspecialchars($project['desc']) ?></p>
            <?php if (!empty($project['link']) && $project['link'] !== '#'): ?>
                <p><a href="<?= htmlspecialchars($project['link']) ?>" target="_blank">Lihat project</a></p>
            <?php endif; ?>
        </div>
    <?php endforeach; ?>
</div>

<?php
include __DIR__ . '/../includes/footer.php';
