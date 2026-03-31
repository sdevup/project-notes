<?php

namespace App\Http\Controllers;

class HomeController
{
    public function index()
    {
        $renderer = new \Framework\Render\Renderer(__DIR__ . '/../../../resources/views');
        return $renderer->render('home');
    }


    public function home()
    {
        $renderer = new \Framework\Render\Renderer(__DIR__ . '/../../../resources/views');
        return $renderer->render('home');
    }

}
