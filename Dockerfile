FROM php:8.2-apache

# Instal dependensi sistem
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    unzip \
    git \
    curl \
    libzip-dev \
    libonig-dev \
    libxml2-dev \
    default-mysql-client

# Konfigurasi & instal ekstensi PHP
RUN docker-php-ext-configure gd --with-freetype --with-jpeg
RUN docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath gd zip

# Aktifkan mod_rewrite Apache
RUN a2enmod rewrite headers

# Set working directory
WORKDIR /var/www/html

# Salin composer.json dan composer.lock
COPY composer.json composer.lock ./

# Instal Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Instal dependensi PHP
RUN composer install --prefer-dist --no-dev --no-scripts --no-progress --no-interaction

# Salin kode aplikasi
COPY . .

# Jalankan composer scripts
RUN composer dump-autoload --optimize

# Salin .env.example menjadi .env jika .env tidak ada
RUN if [ ! -f ".env" ]; then cp .env.example .env; fi

# Atur permission storage dan cache
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
RUN chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Konfigurasi Apache DocumentRoot ke direktori public Laravel
RUN sed -i 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/000-default.conf

# Expose port 80
EXPOSE 80

# Buat script entrypoint
COPY docker-entrypoint.sh /usr/local/bin/
RUN chmod +x /usr/local/bin/docker-entrypoint.sh

# Set entrypoint
ENTRYPOINT ["docker-entrypoint.sh"]

# Start Apache
CMD ["apache2-foreground"]