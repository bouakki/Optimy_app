FROM composer:2 as builder

WORKDIR /app

COPY composer.json composer.lock ./

RUN composer install --no-dev --no-scripts --prefer-dist

COPY . .

FROM php:8.1-apache

RUN apt-get update && apt-get install -y \
    libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql

COPY 000-default.conf /etc/apache2/sites-available/000-default.conf

WORKDIR /var/www/html

COPY --from=builder /app .

RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 755 /var/www/html

EXPOSE 80

CMD ["apache2-foreground"]
