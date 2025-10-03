<?php

declare(strict_types=1);

namespace App\Core;

use RuntimeException;

final class View
{
    public static function page(string $slug, string $view, string $title, array $data = []): array
    {
        return [
            'view' => self::resolve($view),
            'title' => $title,
            'data' => array_merge($data, [
                'activePage' => $slug,
            ]),
        ];
    }

    public static function make(string $view, string $title, array $data = []): array
    {
        return [
            'view' => self::resolve($view),
            'title' => $title,
            'data' => $data,
        ];
    }

    private static function resolve(string $view): string
    {
        $normalized = str_replace('.', '/', $view);
        $path = __DIR__ . '/../../views/' . $normalized . '.php';

        if (!is_file($path)) {
            throw new RuntimeException(sprintf('View "%s" could not be located at path %s', $view, $path));
        }

        return $path;
    }
}
