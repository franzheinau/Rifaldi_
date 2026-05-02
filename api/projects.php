<?php
$pageTitle  = "Projects - Portfolio Rifaldi";
$activePage = "projects";
include __DIR__ . '/../includes/header.php';

$projects = [
    [
        'name' => 'Profile Komunitas Baca',
        'year' => '2023',
        'tech' => ['PHP', 'HTML', 'CSS'],
        'desc' => 'Website profil Komunitas Kecil, tampilan sederhana dengan beberapa halaman statis.',
        'link' => 'https://www.pthreesmada.my.id/'
    ],
];
?>

<div class="section-title">PROJECTS</div>

<div class="section-card" style="margin-bottom:16px;">
    <p>Berikut beberapa project yang pernah saya kerjakan. Sebagian masih sederhana, tapi cukup untuk menunjukkan proses belajar saya.</p>
</div>

<div class="project-list">
    <?php foreach ($projects as $i => $project): ?>
    <div class="project-card">
        <div class="project-header">
            <span class="project-index"><?= str_pad($i + 1, 2, '0', STR_PAD_LEFT) ?></span>
            <h3 class="project-name"><?= htmlspecialchars($project['name']) ?></h3>
            <span class="project-year"><?= htmlspecialchars($project['year']) ?></span>
        </div>
        <p class="project-desc"><?= htmlspecialchars($project['desc']) ?></p>
        <?php if (!empty($project['tech'])): ?>
        <div class="badge-row" style="margin-top:10px;">
            <?php foreach ($project['tech'] as $t): ?>
            <span class="badge badge-<?= strtolower($t) ?>"><?= $t ?></span>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
        <?php if (!empty($project['link']) && $project['link'] !== '#'): ?>
        <div style="margin-top:12px;">
            <a href="<?= htmlspecialchars($project['link']) ?>" target="_blank" class="btn-primary">▶ LIHAT PROJECT</a>
        </div>
        <?php endif; ?>
    </div>
    <?php endforeach; ?>
</div>

<?php include __DIR__ . '/../includes/footer.php'; ?>