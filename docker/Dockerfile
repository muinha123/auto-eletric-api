FROM php:8.2-fpm

# INSTALL LINUX PACKAGES
RUN apt update && apt-get install -y vim unzip git libpng-dev libxml2-dev libzip-dev libcurl4-openssl-dev pkg-config libssl-dev uuid-runtime libnss3-tools

# INSTALL EXTENSIONS
RUN	docker-php-ext-install pdo_mysql mysqli pcntl soap gd

# INSTALL ZIP EXTENSION
RUN	docker-php-ext-install zip

RUN pecl install redis && docker-php-ext-enable redis

WORKDIR /var/www/html/auto-eletric-api
# INSTALL COMPOSER
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
