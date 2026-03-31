<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Framework Simples</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    @include('partials.header')
    <h1>Bem-vindos ao meu Site!! SDEV</h1>
    <p>Este é um exemplo de view com @include.</p>
    <a href="/tarefas">Ver Tarefas</a>
    @include('partials.footer')
    <script src="/js/script.js"></script>
</body>
</html>
