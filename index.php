<?php

declare(strict_types=1);

use App\Http\Controllers\PageController;
use App\Routing\Router;
use App\Routing\RouteNotFoundException;
use App\Support\Config;

require __DIR__ . '/app/bootstrap.php';

$router = new Router(Config::get('pages', []));
$pageKey = $_GET['page'] ?? 'home';

try {
    $page = $router->resolve($pageKey);
    $handler = $page['handler'];
    $response = is_callable($handler)
        ? call_user_func($handler, $page)
        : PageController::serverError();
} catch (RouteNotFoundException) {
    http_response_code(404);
    $response = PageController::notFound();
} catch (Throwable) {
    http_response_code(500);
    $response = PageController::serverError();
}

$pageTitle = $response['title'] ?? 'Importadora Textil Camila';
$data = $response['data'] ?? [];
$viewPath = $response['view'] ?? null;

if ($viewPath === null || !is_file($viewPath)) {
    http_response_code(500);
    $response = PageController::serverError();
    $pageTitle = $response['title'];
    $data = $response['data'] ?? [];
    $viewPath = $response['view'];
}

extract($data, EXTR_SKIP);

require __DIR__ . '/includes/header.php';
require $viewPath;
require __DIR__ . '/includes/footer.php';
