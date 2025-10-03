<?php

declare(strict_types=1);

namespace App\Routing;

use InvalidArgumentException;

final class Router
{
    /**
     * @var array<string, array<string, mixed>>
     */
    private array $routes = [];

    /**
     * @param array<int, array<string, mixed>> $pages
     */
    public function __construct(array $pages = [])
    {
        foreach ($pages as $page) {
            $this->register($page);
        }
    }

    /**
     * @param array<string, mixed> $page
     */
    private function register(array $page): void
    {
        if (!isset($page['slug'], $page['handler'])) {
            throw new InvalidArgumentException('Each page definition requires at least a slug and a handler.');
        }

        $slug = (string) $page['slug'];
        $this->routes[$slug] = $page;

        foreach ($page['aliases'] ?? [] as $alias) {
            $this->routes[(string) $alias] = $page;
        }
    }

    public function has(string $key): bool
    {
        return array_key_exists($key, $this->routes);
    }

    /**
     * @return array<string, mixed>
     */
    public function resolve(string $key): array
    {
        if (!$this->has($key)) {
            throw new RouteNotFoundException($key);
        }

        return $this->routes[$key];
    }
}
