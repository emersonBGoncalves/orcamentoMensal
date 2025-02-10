FROM php:8.2-apache
WORKDIR /var/www/html

RUN a2enmod rewrite
COPY package.json .

RUN apt-get update && apt-get install -y git libzip-dev libpq-dev libxml2-dev libpng-dev \
    && docker-php-ext-install pdo pdo_mysql zip gd

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

COPY . .

EXPOSE 8000

CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
