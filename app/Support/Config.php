<?php

declare(strict_types=1);

namespace App\Support;

final class Config
{
    /**
     * @var array<string, mixed>
     */
    private static array $items = [];

    /**
     * @param array<string, mixed> $items
     */
    public static function setMany(array $items): void
    {
        foreach ($items as $key => $value) {
            self::set($key, $value);
        }
    }

    public static function set(string $key, mixed $value): void
    {
        self::$items[$key] = $value;
    }

    public static function has(string $key): bool
    {
        return self::get($key) !== null;
    }

    public static function get(string $key, mixed $default = null): mixed
    {
        if (array_key_exists($key, self::$items)) {
            return self::$items[$key];
        }

        $segments = explode('.', $key);
        $value = self::$items;

        foreach ($segments as $segment) {
            if (!is_array($value) || !array_key_exists($segment, $value)) {
                return $default;
            }

            $value = $value[$segment];
        }

        return $value;
    }
}
