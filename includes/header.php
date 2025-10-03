<?php
$activePage = $activePage ?? null;
$pageTitle = $pageTitle ?? 'Importadora Textil Camila';

function isActive(?string $current, string $expected): string
{
    return $current === $expected ? 'active' : '';
}

function isActiveGroup(?string $current, array $expected): string
{
    return in_array($current, $expected, true) ? 'active' : '';
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?></title>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hWALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WKbZxgPHs44uWIXLLJAJ9/2PkPKZ5QiAj6Ta86wfsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<header class="bg-primary-dark py-3 shadow-sm">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center gap-2" href="index.php">
                    <img src="https://images.unsplash.com/photo-1521579742250-980c1e65be4c?auto=format&fit=crop&w=240&q=80" alt="Logo Camila Textil" height="44" class="rounded-circle border border-2 border-light">
                    <span class="d-none d-sm-inline">Importadora Camila</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto align-items-lg-center">
                        <li class="nav-item">
                            <a class="nav-link <?= isActive($activePage, 'home'); ?>" aria-current="page" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= isActive($activePage, 'about'); ?>" href="index.php?page=about">Nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= isActive($activePage, 'products'); ?>" href="index.php?page=products">Productos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= isActive($activePage, 'contact'); ?>" href="index.php?page=contact">Contacto</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle <?= isActiveGroup($activePage, ['client-login', 'client-dashboard', 'admin-dashboard']); ?>" href="#" id="navbarDropdownPlatforms" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Plataformas
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end" aria-labelledby="navbarDropdownPlatforms">
                                <li>
                                    <a class="dropdown-item d-flex align-items-center gap-2 <?= isActive($activePage, 'client-login'); ?>" href="index.php?page=cliente-login">
                                        <i class="fas fa-user text-accent"></i>
                                        Portal de Acceso
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item d-flex align-items-center gap-2 <?= isActive($activePage, 'client-dashboard'); ?>" href="index.php?page=panel-cliente">
                                        <i class="fas fa-clipboard-list text-accent"></i>
                                        Panel de Cliente
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item d-flex align-items-center gap-2 <?= isActive($activePage, 'admin-dashboard'); ?>" href="index.php?page=panel-admin">
                                        <i class="fas fa-gear text-accent"></i>
                                        Panel Administrativo
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
<main>
