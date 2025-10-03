<?php

class PageController
{
    private static function makeResponse(string $view, string $title, string $activePage, array $data = []): array
    {
        return [
            'view' => __DIR__ . '/../views/' . $view,
            'title' => $title,
            'data' => array_merge($data, [
                'activePage' => $activePage,
            ]),
        ];
    }

    public static function home(): array
    {
        return self::makeResponse(
            'home.php',
            'Importadora Textil Camila - Textiles de Calidad en Santa Cruz',
            'home'
        );
    }

    public static function about(): array
    {
        return self::makeResponse(
            'about.php',
            'Nuestra Historia - Importadora Textil Camila',
            'about'
        );
    }

    public static function products(): array
    {
        return self::makeResponse(
            'products.php',
            'Nuestros Productos - Importadora Textil Camila',
            'products'
        );
    }

    public static function contact(): array
    {
        return self::makeResponse(
            'contact.php',
            'Contáctanos - Importadora Textil Camila',
            'contact'
        );
    }

    public static function clientLogin(): array
    {
        return self::makeResponse(
            'client-login.php',
            'Portal de Clientes - Importadora Textil Camila',
            'client-login'
        );
    }

    public static function notFound(): array
    {
        return [
            'view' => __DIR__ . '/../views/errors/404.php',
            'title' => 'Página no encontrada - Importadora Textil Camila',
            'data' => [
                'activePage' => null,
            ],
        ];
    }
}
