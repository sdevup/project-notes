<?php

namespace App\Http\Controllers;

class TarefasController
{
    public function index()
    {
        $renderer = new \Framework\Render\Renderer(__DIR__ . '/../../../resources/views');
        return $renderer->render('tarefas');
    }
}