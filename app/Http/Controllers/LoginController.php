<?php

namespace App\Http\Controllers;

class LoginController
{
    public function login()
    {
        $renderer = new \Framework\Render\Renderer(__DIR__ . '/../../../resources/views');
        return $renderer->render('login');
    }
}