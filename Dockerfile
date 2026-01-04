FROM php:8.2-apache

RUN docker-php-ext-install mysqli pdo pdo_mysql

# Remove TODOS os MPMs
RUN a2dismod mpm_event mpm_worker mpm_prefork || true

# Ativa SOMENTE o prefork
RUN a2enmod mpm_prefork

RUN sed -i 's/Listen 80/Listen ${PORT}/g' /etc/apache2/ports.conf \
 && sed -i 's/:80>/:${PORT}>/g' /etc/apache2/sites-available/000-default.conf

COPY . /var/www/html/

RUN chown -R www-data:www-data /var/www/html \
 && chmod -R 755 /var/www/html

EXPOSE 8080

CMD ["apache2-foreground"]
