FROM php:8.2-apache

# Instala Node.js
RUN apt-get update && apt-get install -y curl gnupg \
    && curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs \
    && apt-get clean

# Instala Sass
RUN npm install -g npm@11.12.1 && npm install -g sass

# Define diretório de trabalho
WORKDIR /var/www/html

# Ativa mod_rewrite (necessário para .htaccess)
RUN a2enmod rewrite

# Permite .htaccess (override)
RUN sed -i 's/AllowOverride None/AllowOverride All/g' /etc/apache2/apache2.conf

# Expõe porta padrão do Apache
EXPOSE 80

# Inicia Sass + Apache
CMD sh -c "sass --watch ./resources/sass:./public/css & apache2-foreground"