FROM php:8.1-apache
RUN docker-php-ext-install mysqli && a2enmod rewrite
COPY ./html /var/www/html