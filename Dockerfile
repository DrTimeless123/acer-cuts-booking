FROM php:8.2-cli

RUN apt-get update && apt-get install -y git unzip libzip-dev && docker-php-ext-install zip pdo pdo_mysql pdo_sqlite

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /app
COPY . .
RUN composer install --no-dev --optimize-autoloader
RUN mkdir -p database && touch database/database.sqlite
RUN chmod -R 775 storage bootstrap/cache database

EXPOSE 10000
CMD php artisan migrate --force && php artisan config:clear && php artisan serve --host 0.0.0.0 --port ${PORT:-10000}