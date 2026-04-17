<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tarefas</title>
    <!-- <link rel="stylesheet" href="/css/style.css"> --> <!--Não usar--> 
    <link rel="stylesheet" href="/css/testes/abacate/testes-ab">

    <!-- bootstrap -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"> -->

</head>
<body>

    @include('components.header')

    <h1>Página Teste</h1>
    <main class="container-abacate">
        <div class=" card-abacate">
            <img width="100px" src="https://image.api.playstation.com/vulcan/img/cfn/11307fllh6D-IvbpCa18N0vRggVeRYWA06paTNCj3DENJMScAzW2f3ry4IwFcXBAt9kWXdZGpGoOGjxJ_e9MdordMVAosNhZ.png" alt="Foto">
            <p class="ps5 ">Cuphead</p>
            <button class="teste2">Clique aqui</button>
        </div>

         <div class=" card-abacate">
            <img width="100px" src="https://upload.wikimedia.org/wikipedia/en/d/de/Hollow_Knight_2026_cover_art.jpg" alt="Foto">
            <p class="ps5">Hollow Knight</p>
            <button class="teste2">Clique aqui</button>
        </div>

         <div class=" card-abacate">
            <img  width="100px" src="https://assetsio.gnwcdn.com/ori-and-the-blind-forest-developer-accused-of-bullying-staff-1647862013180.jpg?width=570&quality=85&format=jpg&dpr=3&auto=webp" alt="Foto">
            <p class="ps5">Ori and the Blind Forest</p>
            <button class="teste2">Clique aqui</button>
        </div>
    </main>


    @include('components.footer')

    <!-- <script src="/js/script.js"></script> --><!--Não usar--> 
    <script src="/js/AbacateDEV.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>

</body>
</html> tailwind