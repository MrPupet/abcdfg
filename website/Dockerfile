# Menggunakan image PHP 8.1 dan apache webserver
FROM php:8.1-apache

WORKDIR /var/www/html

RUN apt-get update && apt-get upgrade -y
RUN docker-php-ext-install mysqli

# Setting akses control list untuk kepemilikan 'u' dan 'g' di set ke www-data
RUN chown -R www-data:www-data /var/www/html
# Setting untuk menghilangkan permission 'w' dan 'x' untuk others
RUN chmod -R o-wx /var/www/html

# Copy index.php ke folder docker
COPY ./index.php /var/www/html