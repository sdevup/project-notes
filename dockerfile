FROM php:8.2-cli

# Instala Node.js
RUN apt-get update && apt-get install -y curl gnupg \
    && curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs \
    && apt-get clean

# Define diretório
WORKDIR /app

# Instala Sass
RUN npm install -g npm@11.12.1 && npm install -g sass

# Expõe a porta do PHP
EXPOSE 8000

# Script para rodar tudo junto
CMD sh -c "sass --watch ./resources/sass:./public/css & php -S 0.0.0.0:8000 -t /app"