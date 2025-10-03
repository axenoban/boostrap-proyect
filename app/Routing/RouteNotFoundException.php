<?php

declare(strict_types=1);

namespace App\Routing;

use RuntimeException;

final class RouteNotFoundException extends RuntimeException
{
    public function __construct(string $route)
    {
        parent::__construct(sprintf('Route "%s" was not found.', $route));
    }
}
