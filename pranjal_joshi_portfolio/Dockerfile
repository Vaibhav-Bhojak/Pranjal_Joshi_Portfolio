# ---------- Base PHP Image ----------
FROM php:8.2-cli

# ---------- System Dependencies ----------
RUN apt-get update && apt-get install -y \
    git \
    curl \
    unzip \
    libzip-dev \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libpq-dev \
    && docker-php-ext-install \
    pdo \
    pdo_mysql \
    pdo_pgsql \
    zip \
    gd

# ---------- Install Composer ----------
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# ---------- Set Working Directory ----------
WORKDIR /var/www

# ---------- Copy Project ----------
COPY . .

# ---------- Install Laravel Dependencies ----------
RUN composer install --no-dev --optimize-autoloader

# ---------- Laravel Setup ----------
RUN php artisan config:clear || true
RUN php artisan cache:clear || true
RUN php artisan route:clear || true
RUN php artisan view:clear || true

# ---------- Permissions ----------
RUN chmod -R 775 storage bootstrap/cache

# ---------- Render uses dynamic PORT ----------
EXPOSE 10000

# ---------- Start Laravel ----------
CMD php artisan serve --host=0.0.0.0 --port=10000