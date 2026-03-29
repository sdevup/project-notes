<?php

require __DIR__ . '/../vendor/autoload.php';

use Framework\Render\Renderer;
use Framework\ORM\Model;

// Exemplo de model ORM
class User extends Model
{
    protected static string $table = 'users';
}

// Gravar exemplo
$user = new User(['name' => 'João', 'email' => 'joao@exemplo.com']);
$user->save();

// Ler todos
$users = User::all();

// Render de exemplo
$renderer = new Renderer(__DIR__ . '/../src/framework/Render/views');
$html = $renderer->render('home', ['users' => $users]);

echo $html;
