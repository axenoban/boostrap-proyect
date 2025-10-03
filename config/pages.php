<?php

declare(strict_types=1);

use App\Http\Controllers\PageController;

return [
    [
        'slug' => 'home',
        'aliases' => ['inicio'],
        'handler' => [PageController::class, 'home'],
    ],
    [
        'slug' => 'about',
        'aliases' => ['nosotros'],
        'handler' => [PageController::class, 'about'],
    ],
    [
        'slug' => 'products',
        'aliases' => ['productos'],
        'handler' => [PageController::class, 'products'],
    ],
    [
        'slug' => 'contact',
        'aliases' => ['contacto'],
        'handler' => [PageController::class, 'contact'],
    ],
    [
        'slug' => 'client-login',
        'aliases' => ['cliente-login'],
        'handler' => [PageController::class, 'clientLogin'],
    ],
];
