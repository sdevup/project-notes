<?php

// Simples autoloader PSR-4
spl_autoload_register(function ($class) {
    $prefixes = [
        'Framework\\' => __DIR__ . '/../src/framework/',
        'App\\' => __DIR__ . '/../app/',
    ];

    foreach ($prefixes as $prefix => $baseDir) {
        if (strpos($class, $prefix) === 0) {
            $relativeClass = substr($class, strlen($prefix));
            $file = $baseDir . str_replace('\\', '/', $relativeClass) . '.php';

            if (file_exists($file)) {
                require $file;
                return;
            }
        }
    }
});
