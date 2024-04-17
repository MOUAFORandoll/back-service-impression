FROM php:8.2-fpm

# Copy composer.lock and composer.json
COPY /composer.lock /composer.json /var/www/alerte/

# Set working directory
WORKDIR /var/www/alerte

# Install dependencies
RUN apt-get update && apt-get install -y \
    libpng-dev \
    zlib1g-dev \
    libxml2-dev \
    libzip-dev \
    libonig-dev \
    zip \
    curl \
    unzip \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libpq-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-configure gd \
    && docker-php-ext-install pdo_mysql \
    && docker-php-ext-install pdo_pgsql \
    && docker-php-ext-install mysqli \
    && docker-php-ext-install exif \
    && docker-php-ext-install zip \
    && docker-php-source delete

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*


# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Add user for laravel application
RUN groupadd -g 1000 www/alerte
RUN useradd -u 1000 -ms /bin/bash -g www/alerte www/alerte

# Copy existing application directory contents
COPY ./ /var/www/alerte

# Copy existing application directory permissions
COPY --chown=www:www ./ /var/www/alerte

# Change current user to www
USER www/alerte

# Expose port 9000 and start php-fpm server
EXPOSE 9000
CMD ["php-fpm"]
