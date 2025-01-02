# Используем официальный PHP образ с Apache
FROM php:8.0-apache

# Устанавливаем рабочую директорию
WORKDIR /var/www/html

# Копируем код проекта в контейнер
COPY . .

# Устанавливаем необходимые расширения PHP (если необходимо)
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Настроим права на файлы, если требуется
RUN chown -R www-data:www-data /var/www/html

# Открываем порт 80 для доступа к приложению
EXPOSE 80

# Команда для запуска Apache
CMD ["apache2-foreground"]
