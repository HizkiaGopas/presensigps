FROM php:8.4-cli

WORKDIR /var/www

COPY . .

CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]