<?php

namespace App\Http\Controllers;

class HomeController
{
    public function index()
    {
        return json_encode(['message' => 'olá']);
    }
}
