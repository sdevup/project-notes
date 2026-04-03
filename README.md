🧠 Fundamentos de Front-end

1.  HTML
    -   Estrutura básica
    -   Tags semânticas
    -   Acessibilidade (ARIA)
    -   SEO básico
2.  CSS
    -   Seletores
    -   Pseudo-classes e pseudo-elementos
    -   Flexbox e Grid
    -   Responsividade (media queries)
    -   Animações e transições
3.  SASS
    -   Variáveis
    -   Nesting
    -   Mixins
    -   Organização de estilos

------------------------------------------------------------------------

⚙️ JavaScript e Ecossistema

4.  JavaScript (ES6+)
    -   Variáveis (let, const)
    -   Arrow functions
    -   Promises / async-await
    -   Manipulação de DOM
    -   Eventos
5.  Gerenciamento de pacotes (opcional)
    -   npm / yarn
    -   package.json
6.  Build tools (opcional)
    -   Vite / Webpack (conceitos)
    -   Babel

------------------------------------------------------------------------

💻 Lógica e Programação

7.  Lógica de programação
    -   Condicionais
    -   Loops
    -   Estruturas de dados básicas
8.  Funções e métodos
    -   Parâmetros
    -   Retorno
    -   Funções puras
9.  Estruturas de dados 
    -   Arrays
    -   Objetos
    -   Pilhas e filas (conceito)
10. Algoritmos (opcional)

-   Busca e ordenação
-   Complexidade (Big O)

------------------------------------------------------------------------

🧱 Programação Orientada a Objetos

11. POO

-   Classes e objetos
-   Encapsulamento
-   Herança
-   Polimorfismo
-   Abstração

------------------------------------------------------------------------

🏗️ Arquitetura e Boas Práticas

12. Princípios SOLID
13. Design Patterns

-   Factory
-   Singleton
-   Observer
-   MVC (conceito)

14. Clean Code 

-   Nomeação
-   Legibilidade
-   Organização

------------------------------------------------------------------------

🔌 Back-end (Introdução) (opcional)
 
15. APIs  (opcional)

-   REST
-   JSON
-   HTTP (GET, POST, PUT, DELETE)

16. Banco de dados (opcional)

-   SQL (básico)
-   NoSQL (conceito)

17. Autenticação (opcional)

-   JWT (conceito)
-   Sessões

------------------------------------------------------------------------

🐳 Ferramentas e Ambiente

18. Git e GitHub

-   Versionamento
-   Branches
-   Pull requests

19. Docker (opcional)

-   Containers
-   Dockerfile
-   Docker Compose

20. Linux (opcional)

-   Terminal
-   Permissões
-   Scripts básicos

------------------------------------------------------------------------

🧪 Qualidade e Testes (opcional)

21. Testes (opcional)

-   Testes unitários (conceito)
-   Testes de integração

22. Debugging (opcional)

-   Ferramentas do navegador
-   Logs

------------------------------------------------------------------------

🚀 Deploy e DevOps (básico)  (opcional)

23. Deploy  (opcional)

-   Hospedagem (Vercel, Netlify)
-   Servidores

24. CI/CD (conceito)  (opcional)

-   Automatização de build e deploy

------------------------------------------------------------------------

🔐 Segurança (básico)  (opcional)

25. Boas práticas

-   Validação de dados
-   XSS / CSRF (conceito)

------------------------------------------------------------------------

🚀 Prática

26. Mão na massa

-   Projetos práticos
-   Simulação de desafios reais
-   Refatoração de código
-   Construção de portfólio



## Como criar a imagem Docker

Estar na raiz do projeto e executar esse comando

```bash
docker build -t php-node-sass .
``` 



## Como subir o container no Docker (Windows)

```bash
docker run --name project-notes -v $(pwd):/var/www/html -p 8000:80 php-node-sass


docker run --name project-notes -v %cd%:/var/www/html -p 8000:80 php-node-sass

docker run --name project-notes -v ${PWD}:/var/www/html -p 8000:80 php-node-sass
```

## Como subir o container no Docker (Linux)

```bash
docker run --name project-notes -v $(pwd):/var/www/html -p 8000:80 php-node-sass
``

