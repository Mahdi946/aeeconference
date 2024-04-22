FROM php:7.4-apache
RUN apt-get update && apt-get install -y \
    curl \
    build-essential \
    libssl-dev \
    zlib1g-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libmcrypt-dev \
    libzip-dev \
    libxml2-dev \
    libicu-dev \
    libpng-dev \
    libc-client-dev \
    libkrb5-dev \
    nano \
    cron
RUN rm -r /var/lib/apt/lists/*
RUN a2enmod rewrite
RUN docker-php-ext-install mysqli pdo pdo_mysql json xml intl gd soap zip
RUN docker-php-ext-configure intl
RUN a2enmod rewrite
RUN docker-php-ext-install gd
RUN docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/
RUN service apache2 restart