<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tarefas</title>
    <!-- <link rel="stylesheet" href="/css/style.css"> -->
    <link rel="stylesheet" href="/css/testes/sdev/testes-sdev.css">
</head>
<body>
    
    <!-- Adiciona o header contido em /partials-->
    @include('components.header')

    <main class="container-xl bg-success text-light p-4">
    
    <div>

        <h1>Lista de Tarefas</h1>
        <br/><br/><br/><br/>

        <ul class="lista">
            <li>item 1</li>
            <li >item 2</li>
            <li>item 3</li>
        </ul>

    </div>

    <h1 class="saida">
        saída
    </h1>

    <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>

    </main> 
    <!-- Adiciona o footer contido em partials-->
    @include('components.footer')

    

    <style>
        .background {
            background-color: blue;
        }

        .destacar{
            font-weight: bold;
            color: black;
            font-size : 20px;
            border: 2px solid black;
            background-color: yellow;
            border-radius: 5px;
        }


    </style>

    <script>


        //Classe estatica
        // class Usuario {
        //     static nome = "texto";

        //     static getNome() {
        //         console.log(Usuario.nome);
        //     }
        // }

        // Usuario.nome = "João";

        // Usuario.getNome(); // funciona


        class Usuario {
            constructor(nome, email) {
                this.nome = nome;
                this.email = email;
            }

            getNome() {
                return this.nome;
            }

            getEmail() {
                return this.email;
            }

            // método que será polimórfico
            getDescricao() {
                return `Usuário: ${this.nome}`;
            }
        }

        // herança + polimorfismo
        class Admin extends Usuario {
            constructor(nome, email, nivel) {
                super(nome, email);
                this.nivel = nivel;
            }

            getNivel() {
                return this.nivel;
            }

            // 🔥 sobrescrevendo (polimorfismo)
            getDescricao() {
                return `Admin: ${this.nome} (nível ${this.nivel})`;
            }
        }

        // outra variação pra reforçar polimorfismo
        class Cliente extends Usuario {
            getDescricao() {
                return `Cliente: ${this.nome}`;
            }
        }

        // instâncias
        const user = new Usuario("João", "joao@email.com");
        const admin = new Admin("Maria", "maria@email.com", 1);
        const cliente = new Cliente("Pedro", "pedro@email.com");

        // 💡 polimorfismo em ação
        // const usuarios = [user, admin, cliente];

        // usuarios.forEach(u => {
        //     console.log(u.getDescricao());
        // });



        console.log(user.getDescricao()); 
        console.log(admin.getDescricao()); 
        console.log(cliente.getDescricao());

        //eventos do javascript
        //heranca/polimorfismo

































        // let saida = document.querySelector('.saida');


        // saida.innerText = "Buscando endereço...";


        // saida.innerText = buscarEndereco(62011000, saida);












       
        // function buscarEndereco(cep, li) {
        //     fetch(`https://viacep.com.br/ws/${cep}/json/`)
        //         .then(response => {
        //             if (!response.ok) {
        //                 throw new Error('Erro na requisição');
        //             }
        //             return response.json();
        //         })
        //         .then(data => {

        //             li.innerText = `Cidade: ${data.localidade}, Rua: ${data.logradouro}`;
        //             console.log(data);

        //             // exemplo: usando os dados
        //             console.log("Cidade:", data.localidade);
        //             console.log("Rua:", data.logradouro);
        //         })
        //         .catch(error => {
        //             console.error('Erro ao buscar dados:', error);
        //         });
        // }

        



























        // let ul = document.querySelector('.lista');

        // console.log(ul)

        // let liElements = ul.querySelectorAll('li');



        


        // liElements.forEach( (li, index) => {
        //     // li.addEventListener('mouseover', function() {
        //     //     this.classList.add('destacar');

        //     //     liElements.forEach(otherLi => {
        //     //         if (otherLi !== this) {
        //     //             otherLi.classList.remove('destacar');
        //     //         }
        //     //     });

        //     // });

        //     //li.innerText = usuario[index];

        //     // li.innerText = sites[2];

            

        // });




        // let div = document.querySelectorAll('div')[2];

        // console.log(div)

        // div.querySelector('h1').classList.add('background');

        // document.querySelector('.destacar')
        // .classList.remove('destacar');



        

    </script>


    <script src="/js/script.js"></script>
</body>
</html>