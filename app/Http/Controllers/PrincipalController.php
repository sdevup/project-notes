<?php

namespace App\Http\Controllers;

class PrincipalController
{
    public function principal()
    {
        $renderer = new \Framework\Render\Renderer(__DIR__ . '/../../../resources/views');
        return $renderer->render('principal');
    }
}