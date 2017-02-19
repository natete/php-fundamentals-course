FROM php:7.0-apache

COPY ./ /var/www/html/

FROM php:7.1-fpm

RUN pecl install  xdebug-2.5.0 \
    && docker-php-ext-enable xdebug

