FROM php:8.2-apache

# Instala extensões necessárias
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Desativa todos os MPMs primeiro
RUN a2dismod mpm_event mpm_worker || true

# Ativa apenas o MPM correto
RUN a2enmod mpm_prefork

# Configura Apache para usar a porta do Railway
RUN sed -i 's/Listen 80/Listen ${PORT}/g' /etc/apache2/ports.conf \
 && sed -i 's/:80>/:${PORT}>/g' /etc/apache2/sites-available/000-default.conf

# Copia os arquivos do projeto
COPY . /var/www/html/

# Permissões
RUN chown -R www-data:www-data /var/www/html \
 && chmod -R 755 /var/www/html

# Expõe a porta (Railway injeta PORT)
EXPOSE 8080

# Inicia o Apache
CMD ["apache2-foreground"]
