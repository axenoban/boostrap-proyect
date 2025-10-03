
<?php

require_once __DIR__ . '/controllers/PageController.php';

return [
    'home' => [PageController::class, 'home'],
    'inicio' => [PageController::class, 'home'],
    'about' => [PageController::class, 'about'],
    'nosotros' => [PageController::class, 'about'],
    'products' => [PageController::class, 'products'],
    'productos' => [PageController::class, 'products'],
    'contact' => [PageController::class, 'contact'],
    'contacto' => [PageController::class, 'contact'],
    'cliente-login' => [PageController::class, 'clientLogin'],
];
