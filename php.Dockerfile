FROM php:7.4-apache
RUN apt-get update && apt-get install -y \
libmcrypt-dev \
libzip-dev \
libxml2-dev \
libicu-dev \
libpng-dev \
libc-client-dev \
libkrb5-dev \
nano \
cron \
&& rm -r /var/lib/apt/lists/* \
&& a2enmod rewrite \
&& docker-php-ext-install mysqli pdo pdo_mysql json xml intl gd soap zip
