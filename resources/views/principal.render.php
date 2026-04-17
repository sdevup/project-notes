<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Framework Simples</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    
    <!-- Adiciona o header contido em /partials-->
    @include('components.header')

    <h1>Página principal</h1>
 
    <!-- Adiciona o footer contido em partials-->
    @include('components.footer')

     
    <script src="/js/script.js"></script>
</body>
</html>
