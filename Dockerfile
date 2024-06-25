FROM php:8.0-fpm


RUN docker-php-ext-install mysqli


RUN docker-php-ext-install pdo pdo_mysql

# Copy your PHP files into the container
COPY . /var/www/html

# Set the working directory
WORKDIR /var/www/html