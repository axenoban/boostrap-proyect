
<?php
$routes = require __DIR__ . '/paginas.php';

$pageKey = $_GET['page'] ?? 'home';

if (!isset($routes[$pageKey])) {
    http_response_code(404);
    $response = PageController::notFound();
} else {
    $handler = $routes[$pageKey];
    $response = call_user_func($handler);
}

$pageTitle = $response['title'] ?? 'Importadora Textil Camila';
$data = $response['data'] ?? [];
$viewPath = $response['view'] ?? null;

if (!is_file($viewPath)) {
    http_response_code(500);
    $pageTitle = 'Error interno - Importadora Textil Camila';
    $viewPath = __DIR__ . '/views/errors/500.php';
}

extract($data, EXTR_SKIP);

require __DIR__ . '/includes/header.php';
require $viewPath;
require __DIR__ . '/includes/footer.php';
