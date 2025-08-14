FROM php:8.2-fpm

WORKDIR /var/www/laravel

COPY .. .

RUN docker-php-ext-install pdo pdo_mysql

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/bin --filename=composer --quiet
