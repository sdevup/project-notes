document.querySelectorAll('.teste2').forEach(element => {
    element.addEventListener('click', () => {
        // Sobe até o .card mais próximo e depois procura o .ps5 lá dentro
        const card = element.closest('.card-abacate');
        const mensagem = "O nome do jogo é: " + card.querySelector('.ps5').innerHTML;
        alert(mensagem);
    });
});


//passo 1 - usar javascript para criar para pegar o texto e adicionar a classe

const texto = document.getElementsByTagName('.ps5').textContent;