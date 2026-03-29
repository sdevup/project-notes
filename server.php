<?php

require __DIR__ . '/vendor/autoload.php';

// Configurar autoload para App
spl_autoload_register(function ($class) {
    if (strpos($class, 'App\\') === 0) {
        $file = __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
        if (file_exists($file)) {
            require $file;
        }
    }
});

$router = require __DIR__ . '/routes/web.php';

$method = $_SERVER['REQUEST_METHOD'];
$path = $_SERVER['REQUEST_URI'] ?? '/';

header('Content-Type: application/json');

$response = $router->dispatch($method, $path);

echo $response;
