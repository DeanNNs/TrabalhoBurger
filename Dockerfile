FROM php:8.2-apache

# Instala extensões
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Resolve o conflito de MPM (Erro da imagem 323) e ativa rewrite
RUN rm -f /etc/apache2/mods-enabled/mpm_event.load && \
    a2enmod mpm_prefork && \
    a2enmod rewrite

# Copia os arquivos do projeto
COPY . /var/www/html/

# Ajusta permissões
RUN chown -R www-data:www-data /var/www/html && chmod -R 755 /var/www/html

# O segredo para o erro 502: configurar a porta APENAS no CMD final
CMD sed -i "s/Listen 80/Listen $PORT/g" /etc/apache2/ports.conf && \
    sed -i "s/<VirtualHost \*:80>/<VirtualHost *:$PORT>/g" /etc/apache2/sites-available/000-default.conf && \
    apache2-foreground