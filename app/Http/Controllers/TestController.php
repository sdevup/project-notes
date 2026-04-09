<?php

namespace App\Http\Controllers;

class TestController
{
    public function test()
    {
        $renderer = new \Framework\Render\Renderer(__DIR__ . '/../../../resources/views');
        return $renderer->render('test');
    }

    public function test2()
    {
        $renderer = new \Framework\Render\Renderer(__DIR__ . '/../../../resources/views');
        return $renderer->render('test2');
    }
}