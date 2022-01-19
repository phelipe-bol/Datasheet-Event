FROM php:7.2-apache
COPY . usr/
WORKDIR /var/www/html/