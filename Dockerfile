# Stage 1: Build frontend assets
FROM node:18-alpine as frontend

WORKDIR /app

# Copy only package.json and lock first (for caching)
COPY package*.json ./

# Install dependencies
RUN npm install

# Copy the rest of the files and build
COPY . .
RUN npm run build

# Stage 2: Set up Laravel backend
FROM php:8.2-fpm-alpine as backend

# Install system dependencies
RUN apk add --no-cache \
    bash \
    git \
    curl \
    libpng-dev \
    libjpeg-turbo-dev \
    freetype-dev \
    libzip-dev \
    zip \
    unzip \
    postgresql-dev \
    oniguruma-dev \
    nodejs \
    npm \
    mysql-client \
    icu-dev \
    && docker-php-ext-install pdo pdo_mysql zip intl opcache

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Copy Laravel app code
COPY . .

# Copy the built frontend assets
COPY --from=frontend /app/public/build ./public/build

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Laravel setup (skip if handled by your deploy script)
RUN php artisan config:cache \
    && php artisan route:cache \
    && php artisan view:cache


EXPOSE 8000
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=${PORT}"]

