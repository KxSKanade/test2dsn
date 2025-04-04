#Imagen de php
FROM php:8.1-apache
#Instalacion de dependencias
RUN apt-get update && apt-get install -y \
    libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql pgsql

    #Copiamos todo el contenido de mi proyecto a el contenedor de PHP
COPY . /var/www/html/
#Exponemos el puerto 80 para acceder a la aplicacion
EXPOSE 80