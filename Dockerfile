# Используем официальный PHP образ с Apache
FROM php:8.0-apache

# Устанавливаем рабочую директорию
WORKDIR /var/www/html

# Копируем код проекта в контейнер
COPY . .

# Устанавливаем необходимые пакеты для установки зависимостей
RUN apt-get update && apt-get install -y libpng-dev libjpeg-dev libfreetype6-dev zip git unzip

# Устанавливаем необходимые расширения PHP
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Устанавливаем Composer для управления зависимостями
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Устанавливаем зависимости через Composer (если есть composer.json)
RUN composer install

# Настроим права на файлы, если требуется
RUN chown -R www-data:www-data /var/www/html

# Открываем порт 80 для доступа к приложению
EXPOSE 80

# Команда для запуска Apache
CMD ["apache2-foreground"]
