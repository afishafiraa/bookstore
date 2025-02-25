FROM php:8.2-fpm

WORKDIR /var/www

RUN apt-get update && apt-get install -y \
    git \
    curl \
    unzip \
    libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN apt-get update && apt-get install -y nodejs npm

WORKDIR /var/www
COPY . .

RUN mkdir -p /var/www/storage /var/www/bootstrap/cache \
    && chmod -R 775 /var/www/storage /var/www/bootstrap/cache \
    && chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

EXPOSE 9000
CMD ["php-fpm"]
