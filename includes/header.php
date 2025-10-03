<?php
$activePage = $activePage ?? null;
$pageTitle = $pageTitle ?? 'Importadora Textil Camila';

function isActive(?string $current, string $expected): string
{
    return $current === $expected ? 'active' : '';
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?></title>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hWALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WKbZxgPHs44uWIXLLJAJ9/2PkPKZ5QiAj6Ta86wfsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<header class="site-header shadow-sm">
    <div class="top-bar d-none d-lg-block py-2 text-white">
        <div class="container d-flex justify-content-between align-items-center small">
            <div class="d-flex align-items-center gap-3">
                <span><i class="fas fa-clock me-2 text-accent"></i>Lunes a Viernes 8:30 - 18:30</span>
                <span><i class="fas fa-phone-volume me-2 text-accent"></i>+591 3 322 XXXX</span>
                <span><i class="fas fa-envelope-open-text me-2 text-accent"></i>info@importadoracamilasc.com</span>
            </div>
            <div class="d-flex align-items-center gap-3">
                <a href="#" class="text-white text-decoration-none hover-accent"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="text-white text-decoration-none hover-accent"><i class="fab fa-instagram"></i></a>
                <a href="#" class="text-white text-decoration-none hover-accent"><i class="fab fa-whatsapp"></i></a>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-dark py-3">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <img src="assets/images/logo/3.png" alt="Logo Camila Textil" height="40" class="d-inline-block align-text-top me-2">
                    <span class="d-none d-sm-inline">Importadora Camila</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-1">
                        <li class="nav-item">
                            <a class="nav-link <?= isActive($activePage, 'home'); ?>" aria-current="page" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= isActive($activePage, 'about'); ?>" href="index.php?page=about">Nosotros</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle <?= isActive($activePage, 'products'); ?>" href="#" id="navbarDropdownProducts" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Productos
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdownProducts">
                                <li><a class="dropdown-item" href="index.php?page=products#naturales">Fibras Naturales</a></li>
                                <li><a class="dropdown-item" href="index.php?page=products#sinteticos">Sintéticos</a></li>
                                <li><a class="dropdown-item" href="index.php?page=products#especiales">Tejidos Especiales</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="index.php?page=products">Ver Todos</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= isActive($activePage, 'contact'); ?>" href="index.php?page=contact">Contacto</a>
                        </li>
                        <li class="nav-item d-lg-none">
                            <a class="nav-link text-accent fw-semibold" href="index.php?page=contact">Solicitar Catálogo</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle <?= isActive($activePage, 'client-login'); ?>" href="#" id="navbarDropdownAccount" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Iniciar sesión
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end" aria-labelledby="navbarDropdownAccount">
                                <li>
                                    <a class="dropdown-item d-flex align-items-center gap-2 <?= isActive($activePage, 'client-login'); ?>" href="index.php?page=client-login">
                                        <i class="fas fa-user text-accent"></i>
                                        Portal de Clientes
                                    </a>
                                </li>
                                <li>
                                    <span class="dropdown-item-text small text-secondary-light">Panel administrador disponible en la versión Laravel.</span>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <div class="d-none d-lg-flex ms-3">
                        <a href="index.php?page=contact" class="btn btn-accent btn-sm shadow-sm">Solicitar Catálogo</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
<main>
