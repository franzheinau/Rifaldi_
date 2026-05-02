<?php
if (!isset($pageTitle)) {
    $pageTitle = "Portfolio-Rifaldi";
}
if (!isset($activePage)) {
    $activePage = "";
}
$nama    = "Rifaldi";
$namasub = "Web Developer";
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($pageTitle) ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&family=VT323&display=swap" rel="stylesheet">
    <link rel="icon" href="../assets/img/imagelogo.ico" type="image/x-icon">
<link rel="stylesheet" href="../assets/css/style.css">
<script src="/assets/js/main.js" defer></script>
</head>
<body>

<!-- Background langit senja -->
<div class="sky-bg"></div>

<!-- Bintang (diisi JS) -->
<div class="stars" id="stars"></div>

<!-- Matahari pixel -->
<div class="sun-wrap"><div class="sun"></div></div>

<!-- Kota siluet pixel -->
<div class="city">
    <svg width="100%" height="100%" viewBox="0 0 1200 120" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" style="display:block;">
        <rect x="0"    y="80"  width="16" height="40" fill="#0d0720"/>
        <rect x="16"   y="60"  width="24" height="60" fill="#0d0720"/>
        <rect x="40"   y="70"  width="12" height="50" fill="#0d0720"/>
        <rect x="52"   y="40"  width="32" height="80" fill="#0d0720"/>
        <rect x="84"   y="75"  width="16" height="45" fill="#0d0720"/>
        <rect x="100"  y="50"  width="20" height="70" fill="#0d0720"/>
        <rect x="120"  y="55"  width="28" height="65" fill="#0d0720"/>
        <rect x="148"  y="80"  width="14" height="40" fill="#0d0720"/>
        <rect x="162"  y="35"  width="24" height="85" fill="#0d0720"/>
        <rect x="186"  y="65"  width="18" height="55" fill="#0d0720"/>
        <rect x="204"  y="20"  width="36" height="100" fill="#0d0720"/>
        <rect x="240"  y="70"  width="12" height="50" fill="#0d0720"/>
        <rect x="252"  y="45"  width="20" height="75" fill="#0d0720"/>
        <rect x="272"  y="30"  width="28" height="90" fill="#0d0720"/>
        <rect x="300"  y="75"  width="16" height="45" fill="#0d0720"/>
        <rect x="316"  y="55"  width="22" height="65" fill="#0d0720"/>
        <rect x="338"  y="65"  width="14" height="55" fill="#0d0720"/>
        <rect x="352"  y="25"  width="40" height="95" fill="#0d0720"/>
        <rect x="392"  y="70"  width="12" height="50" fill="#0d0720"/>
        <rect x="404"  y="50"  width="20" height="70" fill="#0d0720"/>
        <rect x="424"  y="40"  width="28" height="80" fill="#0d0720"/>
        <rect x="452"  y="80"  width="16" height="40" fill="#0d0720"/>
        <rect x="468"  y="60"  width="24" height="60" fill="#0d0720"/>
        <rect x="492"  y="50"  width="16" height="70" fill="#0d0720"/>
        <rect x="508"  y="30"  width="32" height="90" fill="#0d0720"/>
        <rect x="540"  y="70"  width="14" height="50" fill="#0d0720"/>
        <rect x="554"  y="55"  width="22" height="65" fill="#0d0720"/>
        <rect x="576"  y="45"  width="18" height="75" fill="#0d0720"/>
        <rect x="594"  y="20"  width="36" height="100" fill="#0d0720"/>
        <rect x="630"  y="75"  width="16" height="45" fill="#0d0720"/>
        <rect x="646"  y="55"  width="24" height="65" fill="#0d0720"/>
        <rect x="670"  y="65"  width="14" height="55" fill="#0d0720"/>
        <rect x="684"  y="25"  width="28" height="95" fill="#0d0720"/>
        <rect x="712"  y="70"  width="12" height="50" fill="#0d0720"/>
        <rect x="724"  y="40"  width="20" height="80" fill="#0d0720"/>
        <rect x="744"  y="50"  width="28" height="70" fill="#0d0720"/>
        <rect x="772"  y="80"  width="16" height="40" fill="#0d0720"/>
        <rect x="788"  y="60"  width="24" height="60" fill="#0d0720"/>
        <rect x="812"  y="50"  width="20" height="70" fill="#0d0720"/>
        <rect x="832"  y="35"  width="32" height="85" fill="#0d0720"/>
        <rect x="864"  y="75"  width="16" height="45" fill="#0d0720"/>
        <rect x="880"  y="55"  width="22" height="65" fill="#0d0720"/>
        <rect x="902"  y="45"  width="18" height="75" fill="#0d0720"/>
        <rect x="920"  y="20"  width="36" height="100" fill="#0d0720"/>
        <rect x="956"  y="70"  width="16" height="50" fill="#0d0720"/>
        <rect x="972"  y="50"  width="24" height="70" fill="#0d0720"/>
        <rect x="996"  y="60"  width="14" height="60" fill="#0d0720"/>
        <rect x="1010" y="30"  width="28" height="90" fill="#0d0720"/>
        <rect x="1038" y="70"  width="12" height="50" fill="#0d0720"/>
        <rect x="1050" y="45"  width="20" height="75" fill="#0d0720"/>
        <rect x="1070" y="55"  width="28" height="65" fill="#0d0720"/>
        <rect x="1098" y="75"  width="16" height="45" fill="#0d0720"/>
        <rect x="1114" y="55"  width="24" height="65" fill="#0d0720"/>
        <rect x="1138" y="65"  width="18" height="55" fill="#0d0720"/>
        <rect x="1156" y="30"  width="44" height="90" fill="#0d0720"/>
        <!-- Lampu jendela -->
        <rect x="60"   y="52" width="4" height="4" fill="#f5c842" opacity="0.8"/>
        <rect x="68"   y="46" width="4" height="4" fill="#f5c842" opacity="0.6"/>
        <rect x="108"  y="60" width="4" height="4" fill="#f5943a" opacity="0.7"/>
        <rect x="130"  y="62" width="4" height="4" fill="#f5c842" opacity="0.9"/>
        <rect x="170"  y="42" width="4" height="4" fill="#b57bee" opacity="0.8"/>
        <rect x="212"  y="28" width="4" height="4" fill="#f5c842" opacity="0.9"/>
        <rect x="220"  y="36" width="4" height="4" fill="#3dbcb0" opacity="0.7"/>
        <rect x="280"  y="38" width="4" height="4" fill="#f5943a" opacity="0.7"/>
        <rect x="360"  y="32" width="4" height="4" fill="#b57bee" opacity="0.8"/>
        <rect x="376"  y="48" width="4" height="4" fill="#f5c842" opacity="0.9"/>
        <rect x="514"  y="38" width="4" height="4" fill="#f5c842" opacity="0.8"/>
        <rect x="522"  y="46" width="4" height="4" fill="#3dbcb0" opacity="0.7"/>
        <rect x="600"  y="28" width="4" height="4" fill="#f5c842" opacity="0.9"/>
        <rect x="690"  y="32" width="4" height="4" fill="#f5c842" opacity="0.8"/>
        <rect x="698"  y="40" width="4" height="4" fill="#b57bee" opacity="0.7"/>
        <rect x="838"  y="42" width="4" height="4" fill="#f5c842" opacity="0.8"/>
        <rect x="926"  y="28" width="4" height="4" fill="#f5c842" opacity="0.9"/>
        <rect x="934"  y="36" width="4" height="4" fill="#3dbcb0" opacity="0.7"/>
        <rect x="1016" y="38" width="4" height="4" fill="#b57bee" opacity="0.8"/>
        <rect x="1024" y="46" width="4" height="4" fill="#f5c842" opacity="0.6"/>
    </svg>
</div>

<!-- Ground -->
<div class="ground"></div>

<div class="page-wrapper">
    <header class="site-header">
        <div class="header-inner">
            <div>
                <div class="site-title"><?php echo strtoupper($nama); ?></div>
                <div class="site-subtitle"><?php echo $namasub; ?> // Code Enthusiast</div>
            </div>
            <nav class="site-nav">
                <a href="/"         class="<?= $activePage === 'home'     ? 'active' : '' ?>">[ HOME ]</a>
                <a href="/about"    class="<?= $activePage === 'about'    ? 'active' : '' ?>">[ ABOUT ]</a>
                <a href="/blog"     class="<?= $activePage === 'blog'     ? 'active' : '' ?>">[ BLOG ]</a>
                <a href="/projects" class="<?= $activePage === 'projects' ? 'active' : '' ?>">[ PROJECTS ]</a>
                <a href="/contact"  class="<?= $activePage === 'contact'  ? 'active' : '' ?>">[ CONTACT ]</a>
            </nav>
        </div>
    </header>

    <main class="content">