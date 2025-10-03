<?php

declare(strict_types=1);

return [
    'main' => [
        [
            'label' => 'Inicio',
            'route' => 'home',
        ],
        [
            'label' => 'Nosotros',
            'route' => 'about',
        ],
        [
            'label' => 'Productos',
            'route' => 'products',
            'children' => [
                [
                    'label' => 'Fibras Naturales',
                    'url' => 'index.php?page=products#naturales',
                ],
                [
                    'label' => 'Sintéticos y Mezclas',
                    'url' => 'index.php?page=products#sinteticos',
                ],
                [
                    'label' => 'Tejidos Especiales',
                    'url' => 'index.php?page=products#tecnicos',
                ],
                [
                    'divider' => true,
                ],
                [
                    'label' => 'Ver catálogo completo',
                    'url' => 'index.php?page=products',
                ],
            ],
        ],
        [
            'label' => 'Contacto',
            'route' => 'contact',
        ],
    ],
    'cta' => [
        'label' => 'Solicitar catálogo',
        'url' => 'index.php?page=contact',
    ],
    'account' => [
        'label' => 'Portal de clientes',
        'route' => 'client-login',
    ],
];
