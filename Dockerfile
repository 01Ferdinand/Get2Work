# Stage 1: Build assets
FROM node:18-alpine as build

WORKDIR /app

COPY package*.json ./
RUN npm install
COPY . .
RUN npm run build

# Stage 2
FROM laravelsail/php82-composer

WORKDIR /var/www/html

COPY . .


RUN composer install \
    && php artisan config:clear \
    && php artisan route:clear

RUN docker-php-ext-install pdo pdo_mysql


EXPOSE 8000

CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]


# Add custom php.ini
COPY ./php.ini /usr/local/etc/php/conf.d/custom.ini