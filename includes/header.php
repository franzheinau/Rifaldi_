<?php
if (!isset($pageTitle)) {
    $pageTitle = "Portfolio";
}
if (!isset($activePage)) {
    $activePage = "";
}

/**
 * BASE URL
 * - Di Vercel: kosong "" (karena project ada di root domain)
 * - Di localhost: isi dengan "/nama-folder-project"
 */
$baseURL = "";

// Kalau di localhost dan project ada di dalam folder, isi otomatis:
if (strpos($_SERVER['HTTP_HOST'], 'localhost') !== false) {
    $baseURL = "/portfolio-rifaldi"; // ganti sesuai nama folder di htdocs kamu
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($pageTitle) ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="<?= $baseURL ?>/assets/css/style.css">
    <script src="/assets/js/main.js" defer></script>
</head>
<body>
<div class="page-wrapper">
    <header class="site-header">
        <div class="site-title">
            <h1>Portfolio <?php echo $nama; ?> </h1>
            <p class="site-subtitle"><?php echo $namasub; ?></p>
        </div>
        <nav class="site-nav">
            <ul>
                <li><a href="/"        class="<?= $activePage === 'home' ? 'active' : '' ?>">Home</a></li>
                <li><a href="/about"   class="<?= $activePage === 'about' ? 'active' : '' ?>">About</a></li>
                <li><a href="/projects" class="<?= $activePage === 'projects' ? 'active' : '' ?>">Projects</a></li>
                <li><a href="/contact" class="<?= $activePage === 'contact' ? 'active' : '' ?>">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main class="content">
