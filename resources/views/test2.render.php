<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tarefas</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    
    <!-- Adiciona o header contido em /partials-->
    @include('partials.header')

    <h1>Página Teste 2</h1>


    <button class="teste2">botão</button>

    <article class="card-sdev">
        <div class="card-header">
            <img src="/images/teste1.jpg" alt="Descrição clara do SDEV" class="card-image">
        </div>
        <div class="card-body">
            <h2 class="card-title">Card SDEV</h2>
            <p class="card-text">Este é um card de teste para a classe .card-sdev com um design mais moderno.</p>
            <button class="card-button">Saiba mais</button>
        </div>
    </article>

 
    <!-- Adiciona o footer contido em partials-->
    @include('partials.footer')

     
    <script src="/js/script.js"></script>
</body>
</html>