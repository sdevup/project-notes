# 🗺️ Mapa do Tesouro: O Caminho do Iniciante em JavaScript

Este guia foi criado para organizar sua jornada do zero ao primeiro projeto funcional. Siga os níveis na ordem para construir uma base sólida.

---

## 🟢 Nível 1: A Lógica (Onde tudo começa)
*O objetivo aqui é entender como o computador armazena informações e toma decisões simples.*

- [ ] **Variáveis e Tipos:** Aprender a usar `let` e `const` para guardar dados. Entender a diferença entre `String` (texto), `Number` (números) e `Boolean` (verdadeiro/falso).
- [ ] **Operadores Matemáticos:** Usar JS como uma calculadora (+, -, *, /) e entender operadores de comparação (>, <, ==, ===).
- [ ] **Estruturas Condicionais:** Criar lógica com `if`, `else if` e `else`.
    * *Exemplo: "Se a idade for maior que 18, permita a entrada".*


```javascript


var usuario = "Carlos";
var eAdmin = true;

if (eAdmin) {
    var usuario = "ADMIN_SISTEMA"; // Você acha que está criando uma variável temporária
    console.log("Dentro do if:", usuario); 
}

// BUG: O valor original "Carlos" foi perdido para sempre!
console.log("Fora do if:", usuario); // Saída: "ADMIN_SISTEMA"

A Solução com let (A Correção)

O let respeita as chaves { }. O que acontece dentro do if fica no if.
JavaScript

let usuario = "Carlos";
let eAdmin = true;

if (eAdmin) {
    let usuario = "ADMIN_SISTEMA"; // Variável local, diferente da global
    console.log("Dentro do if:", usuario); // Saída: "ADMIN_SISTEMA"
}

// SUCESSO: A variável global "Carlos" permanece intacta!
console.log("Fora do if:", usuario); // Saída: "Carlos"





``` 









---

## 🟡 Nível 2: Automatização e Repetição
*Aqui você aprende a não repetir código e a organizar grupos de dados.*

- [ ] **Funções:** Criar "máquinas" de código que recebem dados e devolvem resultados.
- [ ] **Arrays (Listas):** Aprender a agrupar itens (como uma lista de compras) em uma única variável.
- [ ] **Loops (Laços):** Usar `for` e `while` para processar listas ou repetir ações automaticamente.

---

## 🟠 Nível 3: O Navegador (DOM)
*A fase onde o JavaScript se conecta com o HTML/CSS para dar vida à página.*

- [ ] **Selecionar elementos:** Usar `document.querySelector()` para "pegar" tags do HTML.
- [ ] **Eventos:** Aprender o `addEventListener()` para reagir a cliques, movimentos de mouse e teclas pressionadas.
- [ ] **Manipulação:** Alterar o estilo (CSS), mudar textos e usar o atributo `hidden` ou `display: none` dinamicamente.

---

## 🔴 Nível 4: Modernidade e Dados
*Preparação para o mercado e para lidar com aplicações reais.*

- [ ] **Objetos:** Organizar dados complexos. 
    * *Exemplo: Uma variável `usuario` que contém nome, idade e e-mail.*
- [ ] **Promessas (Promises) e Fetch:** Aprender a buscar dados de outros sites (APIs), como previsão do tempo ou preços de moedas.
- [ ] **Projetinhos:** Unir todo o conhecimento para criar algo real (ex: uma Lista de Tarefas ou um Conversor de Moedas).

---

## 💡 Dicas de Ouro
1. **Pratique no Console:** Use o `F12` do navegador diariamente.
2. **Não decore, entenda:** É melhor saber pesquisar "como filtrar array js" do que tentar decorar todos os métodos.
3. **Errar é normal:** O erro do `Lockfile not found` que vimos antes acontece até com seniors. Leia as mensagens de erro!




# 🎓 JavaScript Nível 1: A Lógica (Onde tudo começa)

Nesta aula, vamos aprender como o JavaScript armazena informações, processa cálculos e toma decisões baseadas em condições.

---

## 1. Variáveis e Tipos de Dados

Variáveis são "caixas" onde guardamos informações. No JavaScript moderno, usamos duas palavras-chave principais:

* **`const` (Constante):** Para valores que NÃO mudam. Se você tentar trocar o valor, o JS dará erro.
    * *Exemplo:* `const cpf = "123.456.789-00";`
* **`let` (Variável):** Para valores que PODEM mudar ao longo do tempo.
    * *Exemplo:* `let pontosVida = 100;`

### Tipos de Dados Básicos:
1.  **String:** Textos. Sempre entre aspas (simples, duplas ou crases).
    * `"Olá Mundo"` ou `'JavaScript'`
2.  **Number:** Números inteiros ou decimais. Não usam aspas.
    * `25`, `1500.50`, `-10`
3.  **Boolean:** Valores lógicos. Apenas dois estados.
    * `true` (verdadeiro) ou `false` (falso)

---

## 2. Operadores Matemáticos e de Comparação

O JavaScript funciona como uma calculadora e também como um juiz que compara valores.

### Operadores Matemáticos:
* `+` (Soma)
* `-` (Subtração)
* `*` (Multiplicação)
* `/` (Divisão)

### Operadores de Comparação (O resultado é sempre um Boolean):
* `>` (Maior que)
* `<` (Menor que)
* `===` (Igual a - compara valor e tipo)
* `!==` (Diferente de)
* `>=` (Maior ou igual)
* `<=` (Menor ou igual)

---

## 3. Estruturas Condicionais (if / else)

As condicionais permitem que o código siga caminhos diferentes. É o cérebro da programação.

### Sintaxe Básica:

```javascript
let idade = 20;

if (idade >= 18) {
    console.log("Entrada permitida. Você é maior de idade.");
} else if (idade >= 16) {
    console.log("Entrada permitida apenas com autorização.");
} else {
    console.log("Entrada negada.");
}

```

# 🎓 JavaScript Nível 2: Automatização e Repetição

Nesta aula, vamos aprender a criar blocos de código reutilizáveis e a
lidar com grandes volumes de dados sem precisar escrever centenas de
linhas manualmente.

------------------------------------------------------------------------

1. Funções (As “Máquinas” de Código)

Uma função é um bloco de código que executa uma tarefa específica. Em
vez de escrever a mesma lógica várias vezes, você a coloca em uma função
e a “chama” quando precisar.

Estrutura:

-   Parâmetros: São as entradas (o que a máquina recebe).
-   Retorno: É o resultado (o que a máquina entrega).

    function calcularMedia(nota1, nota2) {
        const media = (nota1 + nota2) / 2;
        return media;
    }

    // Usando a função
    let resultado = calcularMedia(8, 10);
    console.log("A média é: " + resultado);

💡 Por que usar funções? - Evita repetição de código - Facilita
manutenção - Deixa o código mais organizado

------------------------------------------------------------------------

2. Arrays (Listas)

Arrays permitem armazenar vários valores dentro de uma única variável.

------------------------------------------------------------------------

📦 Criando um array:

    let frutas = ["maçã", "banana", "laranja"];

------------------------------------------------------------------------

🔎 Acessando elementos:

    console.log(frutas[0]); // maçã

------------------------------------------------------------------------

➕ Adicionando novos itens:

    frutas.push("uva");

------------------------------------------------------------------------

🔁 Percorrendo o array

🔹 Usando for (forma tradicional):

    for (let i = 0; i < frutas.length; i++) {
        console.log(frutas[i]);
    }

------------------------------------------------------------------------

🔹 Usando forEach (forma moderna e mais simples):

    frutas.forEach(fruta => {
        console.log(fruta);
    });

💡 O forEach é um método de array que executa uma função para cada item
da lista.

------------------------------------------------------------------------

⚠️ Diferença importante:

-   for → mais controle (pode usar break, continue)
-   forEach → mais simples, mas sem controle de parada

------------------------------------------------------------------------

💡 Quando usar arrays?

-   Quando precisar trabalhar com listas de dados
-   Para evitar múltiplas variáveis separadas
-   Quando quiser percorrer dados automaticamente
------------------------------------------------------------------------

3. Loops (Laços de Repetição)

Loops permitem executar um bloco de código várias vezes automaticamente.

FOR (quando você sabe quantas vezes repetir):

    for (let i = 0; i < 5; i++) {
        console.log("Repetição:", i);
    }

WHILE (quando não sabe quantas vezes repetir):

    let contador = 0;

    while (contador < 5) {
        console.log("Contador:", contador);
        contador++;
    }

💡 Diferença principal: - for → mais usado com listas e contadores -
while → usado quando a condição é mais dinâmica

------------------------------------------------------------------------

🔗 Exemplo Prático (Juntando Tudo)

    let numeros = [1, 2, 3, 4, 5];

    function dobrar(numero) {
        return numero * 2;
    }

    for (let i = 0; i < numeros.length; i++) {
        console.log(dobrar(numeros[i]));
    }

Saída esperada:

    2
    4
    6
    8
    10

------------------------------------------------------------------------

🎯 Conclusão

-   Funções evitam repetição de código
-   Arrays organizam dados
-   Loops automatizam tarefas

👉 Juntos, esses três conceitos formam a base da programação eficiente
em JavaScript.




## 🟠 Nível 3: O Navegador (DOM)

*A fase onde o JavaScript se conecta com o HTML/CSS para dar vida à página.*

---

## 🧠 O que é o DOM?

DOM (Document Object Model) é uma representação do HTML em forma de objeto.

👉 Pense assim:

* O HTML vira uma árvore
* Cada tag vira um nó (objeto)
* O JavaScript consegue acessar e modificar esses nós

---

## 1. 🔍 Selecionar Elementos

Existem **duas formas principais** de selecionar elementos:

### ✅ Forma moderna (mais usada hoje)

* `querySelector`
* `querySelectorAll`

### ⚙️ Forma clássica (mais antiga, mas MUITO importante)

* `getElementById`
* `getElementsByClassName`
* `getElementsByTagName`

---

## 🔹 querySelector (moderno)

```javascript
document.querySelector("#id");     // id
document.querySelector(".classe"); // classe
document.querySelector("p");       // tag
```

👉 Retorna **apenas o primeiro elemento encontrado**

---

## 🔹 querySelectorAll

```javascript
document.querySelectorAll(".item");
```

👉 Retorna uma **NodeList (lista de elementos)**

---

## ⚙️ Métodos Clássicos (getElementBy...)

### 🔹 getElementById

```html
<h1 id="titulo">Olá</h1>
```

```javascript
let titulo = document.getElementById("titulo");
```

💡 Mais rápido e direto para IDs
💡 Não usa `#`

---

### 🔹 getElementsByClassName

```html
<p class="texto">A</p>
<p class="texto">B</p>
```

```javascript
let textos = document.getElementsByClassName("texto");
```

💡 Retorna um **HTMLCollection** (parecido com array)

---

### 🔹 getElementsByTagName

```javascript
let paragrafos = document.getElementsByTagName("p");
```

---

## ⚠️ NodeList vs HTMLCollection

| Tipo           | Retorno de       | Característica                  |
| -------------- | ---------------- | ------------------------------- |
| NodeList       | querySelectorAll | Mais moderno, aceita forEach    |
| HTMLCollection | getElementsBy... | Atualiza automaticamente (live) |

---

## 🔹 Outros seletores úteis (CSS)

```javascript
document.querySelector("div p");         // descendente
document.querySelector("ul > li");       // filho direto
document.querySelector("input[type='text']");
document.querySelector(":first-child");
document.querySelector(":last-child");
```

---

## 2. 🛠️ Manipulação de Elementos

### ✏️ Alterar texto

```javascript
titulo.textContent = "Novo título";
```

---

### 🧾 Alterar HTML

```javascript
titulo.innerHTML = "<span>Novo conteúdo</span>";
```

⚠️ Cuidado com segurança (XSS)

---

### 🎨 Alterar estilo

```javascript
titulo.style.color = "red";
titulo.style.backgroundColor = "black";
```

---

### 🧱 Classes

```javascript
titulo.classList.add("ativo");
titulo.classList.remove("ativo");
titulo.classList.toggle("ativo");
```

---

### 👁️ Mostrar / esconder

```javascript
titulo.hidden = true;
titulo.style.display = "none";
```

---

## 3. ⚡ Eventos

### 🖱️ Clique

```javascript
let btn = document.getElementById("btn");

btn.addEventListener("click", () => {
    console.log("Clicou!");
});
```

---

### ⌨️ Teclado

```javascript
document.addEventListener("keydown", (event) => {
    console.log(event.key);
});
```

---

### 🖱️ Mouse

```javascript
btn.addEventListener("mouseenter", () => {
    console.log("Entrou com o mouse");
});
```

---

## 🔗 Exemplo Prático Completo

### HTML

```html
<button id="btn">Clique</button>
<p class="texto">Texto original</p>
```

### JavaScript

```javascript
let btn = document.getElementById("btn");
let texto = document.querySelector(".texto");

btn.addEventListener("click", () => {
    texto.textContent = "Texto alterado!";
    texto.style.color = "blue";
});
```

---

## 🎯 Conclusão

* `getElementById` → rápido e direto
* `querySelector` → mais flexível
* DOM = ponte entre JS e HTML

---

## 💡 Dica de Ouro

Hoje em dia:

👉 Use `querySelector` na maioria dos casos
👉 Use `getElementById` quando quiser performance e simplicidade

---



## 🔴 Nível 4: Modernidade e Dados (Parte 1 — Objetos e Classes)

---

## 🧠 Objetos vs Classes

Até agora você viu objetos simples:

```javascript
let usuario = {
    nome: "João",
    idade: 25
};
```

👉 Isso funciona, mas não escala bem.

💡 Para criar vários objetos organizados → usamos **classes**

---

## 🏗️ Classes (Modelo de objetos)

Uma classe é como uma “fábrica” de objetos.

---

### 🔹 Criando uma classe

```javascript
class Usuario {
    constructor(nome, idade) {
        this.nome = nome;
        this.idade = idade;
    }
}
```

---

### 🔹 Criando instâncias

```javascript
let user1 = new Usuario("João", 25);
let user2 = new Usuario("Maria", 30);
```

---

## ⚙️ Métodos

Funções dentro da classe.

```javascript
class Usuario {
    constructor(nome) {
        this.nome = nome;
    }

    falar() {
        console.log("Olá, eu sou " + this.nome);
    }
}

let user = new Usuario("Ana");
user.falar();
```

---

## 🔒 Encapsulamento (private e public)

Encapsulamento = proteger dados internos.

---

### 🔹 Público (default)

```javascript
class Conta {
    saldo = 0;
}
```

---

### 🔹 Privado (#)

```javascript
class Conta {
    #saldo = 0;

    depositar(valor) {
        this.#saldo += valor;
    }

    verSaldo() {
        return this.#saldo;
    }
}
```

```javascript
let conta = new Conta();
conta.depositar(100);
console.log(conta.verSaldo());

// ❌ ERRO:
// conta.#saldo
```

👉 `#` impede acesso direto

---

## 🧱 Getters e Setters

Controlam leitura e escrita.

```javascript
class Pessoa {
    constructor(nome) {
        this._nome = nome;
    }

    get nome() {
        return this._nome;
    }

    set nome(novoNome) {
        this._nome = novoNome;
    }
}
```

---

## 🧬 Herança

Uma classe pode herdar outra.

```javascript
class Animal {
    falar() {
        console.log("Som genérico");
    }
}

class Cachorro extends Animal {
    falar() {
        console.log("Latido");
    }
}

let dog = new Cachorro();
dog.falar();
```

---

## 🔁 Polimorfismo

Mesma função, comportamentos diferentes.

👉 Exemplo acima já é polimorfismo

```javascript
animal.falar();   // Som genérico
cachorro.falar(); // Latido
```

---

## 🧊 Static (métodos de classe)

Não precisa criar objeto para usar.

```javascript
class Calculadora {
    static somar(a, b) {
        return a + b;
    }
}

console.log(Calculadora.somar(2, 3));
```

---

## ⚠️ this (muito importante)

`this` se refere ao objeto atual.

```javascript
this.nome
```

👉 Se errar isso → seu código quebra fácil

---

# 🔵 Parte 2 — Promises (AGORA COMPLETO)

---

## 🔹 O que é uma Promise?

Uma Promise representa um valor que será resolvido no futuro.

Estados:

* pending (pendente)
* fulfilled (resolvida)
* rejected (erro)

---

## 🔹 Criando uma Promise

```javascript
let promessa = new Promise((resolve, reject) => {
    let sucesso = true;

    if (sucesso) {
        resolve("Deu certo!");
    } else {
        reject("Deu erro!");
    }
});
```

---

## 🔹 O que é `.then()`?

`.then()` é executado quando a promise é resolvida (resolve)

```javascript
promessa.then(resultado => {
    console.log(resultado);
});
```

👉 Recebe o valor do `resolve()`

---

## 🔹 Encadeamento de `.then()`

```javascript
promessa
    .then(res => {
        console.log(res);
        return "Próximo passo";
    })
    .then(novo => {
        console.log(novo);
    });
```

👉 Um `.then` pode passar dados para o próximo

---

## 🔹 `.catch()`

Captura erros (reject)

```javascript
promessa.catch(erro => {
    console.log(erro);
});
```

---

## 🔹 `.finally()`

Sempre executa (erro ou sucesso)

```javascript
promessa.finally(() => {
    console.log("Sempre roda");
});
```

---

## 🔹 Promise.all()

Executa várias promises ao mesmo tempo

```javascript
Promise.all([
    Promise.resolve(1),
    Promise.resolve(2)
]).then(resultados => {
    console.log(resultados); // [1, 2]
});
```

---

## 🔹 Promise.race()

Retorna a primeira que terminar

```javascript
Promise.race([
    p1,
    p2
]).then(resultado => {
    console.log(resultado);
});
```

---

## 🔹 Async / Await (forma moderna)

```javascript
async function exemplo() {
    try {
        let resultado = await promessa;
        console.log(resultado);
    } catch (erro) {
        console.log(erro);
    }
}
```

👉 Faz código assíncrono parecer síncrono

---

# 🌐 Fetch (Agora bem explicado)

---

## 🔹 O que o fetch retorna?

👉 Uma **Promise**

---

## 🔹 Fluxo completo

```javascript
fetch("https://api.exemplo.com/dados")
    .then(resposta => {
        return resposta.json();
    })
    .then(dados => {
        console.log(dados);
    })
    .catch(erro => {
        console.log("Erro:", erro);
    });
```

---

## 🔹 Explicação real

1. fetch → faz requisição
2. resposta.json() → transforma em objeto JS
3. then → recebe os dados

---

## 🔹 Com async/await

```javascript
async function buscarDados() {
    try {
        let resposta = await fetch("https://api.exemplo.com/dados");
        let dados = await resposta.json();

        console.log(dados);
    } catch (erro) {
        console.log("Erro:", erro);
    }
}
```

---

## ⚠️ Erros comuns com fetch

* API fora do ar
* JSON inválido
* esquecer await

---

# 🔗 Exemplo Real

## 💰 Conversor de Moedas

```javascript
async function converter() {
    let resposta = await fetch("https://api.exchangerate-api.com/v4/latest/USD");
    let dados = await resposta.json();

    let taxa = dados.rates.BRL;

    console.log("1 USD =", taxa, "BRL");
}
```

---

## 🧩 Lista de Tarefas (dados reais)

```javascript
let tarefas = [
    { nome: "Estudar JS", concluida: false },
    { nome: "Treinar código", concluida: true }
];

tarefas.forEach(tarefa => {
    console.log(tarefa.nome);
});
```

---

## 🎯 Conclusão

Agora você domina:

* Classes e POO
* Encapsulamento e herança
* Promises completas
* Fetch + APIs

👉 Isso já é base de aplicações reais.

---

## 🚀 Próximo passo (nível avançado)

* Módulos (`import/export`)
* localStorage
* APIs reais com autenticação
* Frameworks (React)

---

Se quiser, posso te levar para um projeto nível portfólio (tipo app real mesmo).
