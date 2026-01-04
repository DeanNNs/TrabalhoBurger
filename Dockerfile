FROM php:8.2-apache

# Força rebuild (evita cache)
RUN echo "force rebuild"

# Instala extensões PHP necessárias
RUN docker-php-ext-install mysqli pdo pdo_mysql

# REMOVE completamente MPMs conflitantes
RUN rm -f /etc/apache2/mods-enabled/mpm_event.* \
          /etc/apache2/mods-enabled/mpm_worker.* \
          /etc/apache2/mods-available/mpm_event.* \
          /etc/apache2/mods-available/mpm_worker.*

# Garante que APENAS o prefork esteja ativo
RUN a2enmod mpm_prefork

# Ajusta Apache para usar a porta do Railway
RUN sed -i 's/Listen 80/Listen ${PORT}/g' /etc/apache2/ports.conf \
 && sed -i 's/:80/:${PORT}/g' /etc/apache2/sites-available/000-default.conf

# Copia o projeto para o Apache
COPY . /var/www/html/

# Ajusta permissões
RUN chown -R www-data:www-data /var/www/html \
 && chmod -R 755 /var/www/html

# Comando final
CMD ["apache2-foreground"]
