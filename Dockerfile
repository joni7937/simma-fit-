# Use official PHP image as base image
FROM php:7.4-apache

# Install PHP extensions (if needed)
RUN apt-get update && apt-get install -y libpng-dev libjpeg-dev libfreetype6-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd

# Set the working directory
WORKDIR /var/www/html

# Copy the entire application to the container
COPY . .

# Install Composer (PHP dependency manager)
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install PHP dependencies using Composer
RUN composer install

# Expose port 80
EXPOSE 80

# Start Apache service
CMD ["apache2-foreground"]
