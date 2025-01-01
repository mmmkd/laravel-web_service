FROM php:8.1-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    curl \
    zip \
    unzip \
    git \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy project files to the container
COPY . .

# Install Laravel dependencies
RUN composer install --optimize-autoloader --no-dev

# Expose port 80 to allow HTTP traffic
EXPOSE 80

# Start the Laravel development server
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=80"]
# Expose port 80 for the application
EXPOSE 80

# Run Laravel using Artisan serve
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=80"]
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=${PORT:-80}"]

