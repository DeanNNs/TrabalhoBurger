FROM php:8.1-apache

# Ativa mod_rewrite
RUN a2enmod rewrite

# Remove MPMs extras (evita o erro "More than one MPM loaded")
RUN a2dismod mpm_event mpm_worker || true
RUN a2enmod mpm_prefork

# Copia o projeto
COPY . /var/www/html/

# Permissões
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Apache vai escutar a porta do Railway
RUN sed -i 's/Listen 80/Listen ${PORT}/' /etc/apache2/ports.conf \
 && sed -i 's/:80/:${PORT}/' /etc/apache2/sites-available/000-default.conf

# Expõe a porta dinâmica
EXPOSE ${PORT}

# Inicia Apache
CMD ["apache2-foreground"]
