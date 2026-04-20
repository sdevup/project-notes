<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tarefas</title>
    <link rel="stylesheet" href="/css/testes/abacate/testes-ab.css">
</head>
<body>

    @include('components.header')

    <h1>Teste Abacate</h1>

    <main class="fundo my-5">
        <div class="container-abacate">
            
            <div class="card-abacate">
                <img src="https://image.api.playstation.com/vulcan/img/cfn/11307fllh6D-IvbpCa18N0vRggVeRYWA06paTNCj3DENJMScAzW2f3ry4IwFcXBAt9kWXdZGpGoOGjxJ_e9MdordMVAosNhZ.png" 
                     alt="Cuphead" style="width: 100px;">
                <h5 class="ps5">Cuphead</h5>
                <button class="btn teste2">Clique aqui</button>
            </div>

            <div class="card-abacate">
                <img src="https://upload.wikimedia.org/wikipedia/en/d/de/Hollow_Knight_2026_cover_art.jpg" 
                     alt="Hollow Knight" style="width: 100px;">
                <h5 class="ps5">Hollow Knight</h5>
                <button class="btn teste2">Clique aqui</button>
            </div>

            <div class="card-abacate">
                <img src="https://assetsio.gnwcdn.com/ori-and-the-blind-forest-developer-accused-of-bullying-staff-1647862013180.jpg?width=570&quality=85&format=jpg&dpr=3&auto=webp" 
                     alt="Ori" style="width: 180px;">
                <h5 class="ps5">Ori and the Blind Forest</h5>
                <button class="btn teste2">Clique aqui</button>
            </div>

        </div>
    </main>
</body>
</html>