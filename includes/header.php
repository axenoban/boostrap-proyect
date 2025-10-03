<?php
use App\Support\Config;

$activePage = $activePage ?? null;
$pageTitle = $pageTitle ?? 'Importadora Textil Camila';

/** @var array{name: string, contact: array{phone: string, email: string}} $company */
$company = Config::get('company');
$navigation = Config::get('navigation');

function nav_is_active(?string $current, string $expected): string
{
    return $current === $expected ? 'active' : '';
}

function nav_url(string $route): string
{
    return $route === 'home' ? 'index.php' : 'index.php?page=' . urlencode($route);
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hWALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WKbZxgPHs44uWIXLLJAJ9/2PkPKZ5QiAj6Ta86wfsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<header class="site-header">
    <div class="top-bar">
        <div class="container d-flex flex-column flex-lg-row justify-content-lg-between align-items-lg-center gap-2 py-2">
            <div class="d-flex flex-wrap gap-3 small text-white-50">
                <span><i class="fas fa-phone me-2 text-accent"></i><?= htmlspecialchars($company['contact']['phone'], ENT_QUOTES, 'UTF-8'); ?></span>
                <span><i class="fas fa-envelope me-2 text-accent"></i><?= htmlspecialchars($company['contact']['email'], ENT_QUOTES, 'UTF-8'); ?></span>
            </div>
            <div class="d-flex gap-3 small text-white-50">
                <span><i class="fas fa-clock me-2 text-accent"></i>Lunes a Viernes 8:30 - 18:30</span>
                <span><i class="fas fa-location-dot me-2 text-accent"></i>Santa Cruz, Bolivia</span>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="index.php">
                <img src="assets/images/logo/3.png" alt="Logo Importadora Textil Camila" height="44" class="me-2">
                <span>Importadora Camila</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavigation" aria-controls="mainNavigation" aria-expanded="false" aria-label="Abrir navegación">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNavigation">
                <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-2">
                    <?php foreach ($navigation['main'] as $item): ?>
                        <?php $route = $item['route']; ?>
                        <?php if (isset($item['children'])): ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle <?= nav_is_active($activePage, $route); ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <?= htmlspecialchars($item['label'], ENT_QUOTES, 'UTF-8'); ?>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-dark">
                                    <?php foreach ($item['children'] as $child): ?>
                                        <?php if (isset($child['divider']) && $child['divider'] === true): ?>
                                            <li><hr class="dropdown-divider"></li>
                                        <?php else: ?>
                                            <li><a class="dropdown-item" href="<?= htmlspecialchars($child['url'], ENT_QUOTES, 'UTF-8'); ?>"><?= htmlspecialchars($child['label'], ENT_QUOTES, 'UTF-8'); ?></a></li>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                        <?php else: ?>
                            <li class="nav-item">
                                <a class="nav-link <?= nav_is_active($activePage, $route); ?>" href="<?= htmlspecialchars(nav_url($route), ENT_QUOTES, 'UTF-8'); ?>">
                                    <?= htmlspecialchars($item['label'], ENT_QUOTES, 'UTF-8'); ?>
                                </a>
                            </li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                    <li class="nav-item d-lg-none">
                        <a class="nav-link text-accent fw-semibold" href="<?= htmlspecialchars(nav_url($navigation['account']['route']), ENT_QUOTES, 'UTF-8'); ?>">
                            <?= htmlspecialchars($navigation['account']['label'], ENT_QUOTES, 'UTF-8'); ?>
                        </a>
                    </li>
                    <li class="nav-item d-lg-none">
                        <a class="nav-link" href="<?= htmlspecialchars($navigation['cta']['url'], ENT_QUOTES, 'UTF-8'); ?>"><?= htmlspecialchars($navigation['cta']['label'], ENT_QUOTES, 'UTF-8'); ?></a>
                    </li>
                </ul>
                <div class="navbar-actions d-none d-lg-flex align-items-center gap-3 ms-lg-4">
                    <a class="btn btn-outline-light btn-sm" href="<?= htmlspecialchars(nav_url($navigation['account']['route']), ENT_QUOTES, 'UTF-8'); ?>">
                        <?= htmlspecialchars($navigation['account']['label'], ENT_QUOTES, 'UTF-8'); ?>
                    </a>
                    <a class="btn btn-accent btn-sm" href="<?= htmlspecialchars($navigation['cta']['url'], ENT_QUOTES, 'UTF-8'); ?>">
                        <?= htmlspecialchars($navigation['cta']['label'], ENT_QUOTES, 'UTF-8'); ?>
                    </a>
                </div>
            </div>
        </div>
    </nav>
</header>
<main>
