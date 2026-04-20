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

    <h1>Página home</h1>


    <pedro  >elemento 1 classe</pedro>
    <pedro  >elemento 1 2 classe</pedro>



    <p id="el2">elemento 2 id</p>















    =======================================================


    <h1 class="exibirDados">os dados aparecerão aqui</h1>

    <button onclick="exibirDados()">Exibir dados</button>

    <br/><br/>




    ======================================================= 
    <br/><br/>



    <button id="btnBuscar">Buscar Usuário</button> 
    <p class="status">

    </p> 
    <div class="usuario">
        
    </div>







    
    <!-- Adiciona o footer contido em partials-->
    @include('components.footer')

     
    <script src="/js/script.js"></script>
</body>
</html>
