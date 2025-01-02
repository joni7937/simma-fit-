# Используем официальный образ PHP с Apache как базовый
FROM php:8.0-apache

# Устанавливаем необходимые расширения PHP и зависимости
RUN apt-get update && apt-get install -y libpng-dev libjpeg-dev libfreetype6-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd

# Устанавливаем рабочую директорию внутри контейнера
WORKDIR /var/www/html

# Копируем содержимое текущей директории в контейнер
COPY . .

# Включаем Apache mod_rewrite для перенаправления URL (если нужно)
RUN a2enmod rewrite

# Открываем порт 80 для приложения
EXPOSE 80
