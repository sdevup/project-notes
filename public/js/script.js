console.log('JavaScript carregado!');

function saudacao() {
    alert('Olá! Bem-vindo ao Framework Simples.');
}

// Chama a função ao carregar a página
window.onload = function() {
    //saudacao();
};


// +++++ Exemplo de função para manipular o DOM +++++
let objetoSimples = {
    nome: 'Framework Simples',
    versao: '1.0',
    descricao: 'Um framework leve e fácil de usar para desenvolvimento web.'
}


class pessoa {
    constructor(nome, idade) {
        this.nome = nome;
        this.idade = idade;
    }

    apresentar() {
        return `Olá, meu nome é ${this.nome} e tenho ${this.idade} anos.`;
    }
}



function exibirDados(){
    let substituir = document.getElementsByClassName('exibirDados')[0];

    let novaPessoa = new pessoa('João', 30);

    substituir.textContent = `
        versao: ${objetoSimples.versao}`;

    //substituir.textContent = novaPessoa.apresentar();
}


async function fluxoSequencial() {

    function buscarUsuario() {
        return new Promise(resolve => {
            setTimeout(() => {
                resolve(
                    { id: 1, nome: "Maria" }
                );
            }, 1000);
        });
    }

    function buscarPosts(userId) {
        return new Promise(resolve => {
            setTimeout(() => {
                resolve(["Post 1", "Post 2"]);
            }, 1000);
        });
    }

    let usuario = await buscarUsuario();
    let posts = await buscarPosts(usuario.id);

    console.log(usuario);
    console.log(posts);
}


document.getElementById('btnBuscar').addEventListener('click', () => {
    console.log('Buscando dados...');
    fluxoSequencial();
});