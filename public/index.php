<?php

require __DIR__ . '/../vendor/autoload.php';

// Servir arquivos estáticos
$filePath = __DIR__ . $_SERVER['REQUEST_URI'];
if (is_file($filePath) && file_exists($filePath)) {
    // Definir o tipo de conteúdo apropriado
    $ext = pathinfo($filePath, PATHINFO_EXTENSION);
    $mimeTypes = [
        'css' => 'text/css',
        'js' => 'application/javascript',
        'png' => 'image/png',
        'jpg' => 'image/jpeg',
        'jpeg' => 'image/jpeg',
        'gif' => 'image/gif',
        'ico' => 'image/x-icon',
    ];
    
    if (isset($mimeTypes[$ext])) {
        header('Content-Type: ' . $mimeTypes[$ext]);
    }
    
    return readfile($filePath);
}

// Configurar autoload para App
spl_autoload_register(function ($class) {
    if (strpos($class, 'App\\') === 0) {
        $file = __DIR__ . '/../' . str_replace('\\', '/', $class) . '.php';
        if (file_exists($file)) {
            require $file;
        }
    }
});

$router = require __DIR__ . '/../routes/web.php';

$method = $_SERVER['REQUEST_METHOD'];
$path = $_SERVER['REQUEST_URI'] ?? '/';

$response = $router->dispatch($method, $path);

$response = $router->dispatch($method, $path);

echo $response;
