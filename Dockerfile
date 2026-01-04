FROM php:8.2-apache

# Desabilita todos os MPMs
RUN a2dismod mpm_event mpm_worker || true

# Habilita apenas o prefork
RUN a2enmod mpm_prefork

# Instala extensões PHP necessárias
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Porta usada pelo Railway
ENV PORT=8080
RUN sed -i 's/80/${PORT}/g' /etc/apache2/ports.conf /etc/apache2/sites-available/000-default.conf

EXPOSE 8080

CMD ["apache2-foreground"]
