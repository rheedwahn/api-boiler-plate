FROM php:7.4-fpm

# Copy composer.lock and composer.json
COPY composer.lock composer.json /var/www/

# Set working directory
WORKDIR /var/www

# Install dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libonig-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    unzip \
    git \
    curl \
    libzip-dev

RUN apt-get install -y \
       libxrender1 \
       libfontconfig1 \
       libx11-dev \
       libjpeg62 \
       libxtst6 \
       wget

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install extensions
RUN docker-php-ext-install pdo_mysql zip exif pcntl
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
  && docker-php-ext-install -j "$(nproc)" gd

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

#copy the start script
COPY docker/start.sh /usr/local/bin/start
RUN chmod u+x /usr/local/bin/start

# Add user for laravel application
RUN groupadd -g 1000 www
RUN useradd -u 1000 -ms /bin/bash -g www www

# Set working directory
WORKDIR /var/www

# Copy existing application directory contents
COPY . /var/www

# Copy existing application directory permissions
COPY --chown=www:www . /var/www

#copy the .env.example to .env
RUN cp /var/www/.env.example /var/www/.env

# Install the php and npm dependencies
RUN cd /var/www && /usr/local/bin/composer install --no-ansi --optimize-autoloader --no-plugins --no-interaction \
    && php artisan config:clear \
    && php artisan cache:clear \
    && php artisan route:clear

RUN chown -R www:www /usr/local/bin/start

# Change current user to www
USER www

# Expose port 9000 and start php-fpm server
EXPOSE 9000

CMD ["/usr/local/bin/start"]
