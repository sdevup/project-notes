<?php

namespace App\Http\Controllers;

class TestController
{
    //rota para teste Pedro DEV
    public function test()
    {
        $renderer = new \Framework\Render\Renderer(__DIR__ . '/../../../resources/views');
        return $renderer->render('abacate.test');

    }



    //rota para teste 2 SDEV
    public function test2()
    {
        $renderer = new \Framework\Render\Renderer(__DIR__ . '/../../../resources/views');
        return $renderer->render('sdev.test2');
    }
}