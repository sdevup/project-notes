# project-notes

1. Revisar html

2. Revisar css

3. Revisar SASS

4. Revisar logica de programação

5. Revisar funções e métodos

6. Revisar orientação a objetos

7. Revisar algoritmos

8. Revisar Solid

9. Revisar Design paterns

10. Mão na massa!!!



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

