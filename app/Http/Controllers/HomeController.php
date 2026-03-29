<?php

namespace App\Http\Controllers;

class HomeController
{
    public function index()
    {
        $renderer = new \Framework\Render\Renderer(__DIR__ . '/../../../src/framework/Render/views');
        return $renderer->render('home');
    }
}
