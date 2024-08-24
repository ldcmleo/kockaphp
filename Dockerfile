FROM php:8.3.4-apache

RUN a2enmod rewrite
RUN apt-get update && apt-get install -y libpq-dev
RUN docker-php-ext-install mysqli pdo pdo_mysql pdo_pgsql

WORKDIR /var/www/html