FROM ubuntu:20.04
ENV DEBIAN_FRONTEND noninteractive

RUN apt-get update && \
    apt-get -y upgrade && \
    apt-get install -y software-properties-common curl && \
    LC_ALL=C.UTF-8 add-apt-repository -y -u ppa:ondrej/php && \
    apt-get install -y \
    php8.1 \
    php8.1-fpm \
    php8.1-pgsql \
    php8.1-xml \
    php8.1-gd \
    php8.1-gmp \
    php8.1-curl \
    php8.1-redis \
    php8.1-mbstring \
    php8.1-xml \
    php8.1-opcache \
    php8.1-bcmath \
    php8.1-common \
    php8.1-dom \
    php8.1-phar \
    php8.1-zip \
    php8.1-simplexml \
    php8.1-tokenizer \
    php8.1-pdo \
    php8.1-fileinfo \
    php8.1-ctype \
    php8.1-exif \
    php8.1-xmlwriter \
    php8.1-xmlreader \
    php8.1-iconv \
    php8.1-sqlite \
    php8.1-mysql \
    curl \
    zip \
    mcrypt \
    openssl \
    nginx \
    vim \
    libargon2-1 \
    libidn2-0 \
    libpcre2-8-0 \
    libpcre3 \
    libxml2 \
    libzstd1 \
    default-mysql-client \
    supervisor && \
    rm -fr /var/lib/apt/lists/*

# Install extensions
#RUN apt-get install -y mysqli pdo pdo_mysql zip exif pcntl

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN usermod -u 1000 www-data && groupmod -g 1000 www-data

RUN rm -f /etc/nginx/nginx.conf
RUN rm -f /etc/nginx/sites-enabled/default

WORKDIR /var/www/app

ADD ./docker/nginx /etc/nginx

ADD . .
RUN composer validate
RUN composer update --optimize-autoloader --prefer-dist --no-progress

RUN cp /var/www/app/.env.example /var/www/app/.env

RUN chown -R www-data:www-data /var/www/app

RUN mkdir /run/php

COPY docker/php/laravel.conf /etc/php/8.1/fpm/pool.d/laravel.conf
COPY docker/php/php.ini /etc/php/8.1/fpm/php.ini

RUN rm /etc/php/8.1/fpm/pool.d/www.conf

RUN sed -i -e 's/;daemonize = yes/daemonize = no/g' /etc/php/8.1/fpm/php-fpm.conf

COPY docker/supervisord.conf /etc/supervisor/conf.d/supervisord.conf

RUN chown -R www-data:www-data /var/log/supervisor/ &&\
    chown -R www-data:www-data /etc/nginx/

RUN chmod +x "./docker/entrypoint.sh"

CMD ["/bin/bash", "./docker/entrypoint.sh"]