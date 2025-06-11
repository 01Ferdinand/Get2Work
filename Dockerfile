FROM laravelsail/php82-composer

WORKDIR /var/www/html

COPY . .

RUN composer install \
    && php artisan config:clear \
    && php artisan route:clear

EXPOSE 8000

CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]


# Add custom php.ini
COPY ./php.ini /usr/local/etc/php/conf.d/custom.ini