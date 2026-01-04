FROM php:8.2-apache

# 1. Instala extensões PHP
RUN docker-php-ext-install mysqli pdo pdo_mysql

# 2. Habilita o mod_rewrite
RUN a2dismod mpm_event || true && a2enmod mpm_prefork && a2enmod rewrite

# 3. Copia os arquivos
COPY . /var/www/html/

# 4. Ajusta permissões
RUN chown -R www-data:www-data /var/www/html && chmod -R 755 /var/www/html

# Deixe o Apache ouvir na porta padrão; o Railway gerencia o mapeamento interno
EXPOSE 80

# 6. COMANDO DE INICIALIZAÇÃO
# Usamos o formato de shell para garantir que as variáveis de ambiente ($PORT) sejam lidas
CMD ["sh", "-c", "sed -i 's/Listen 80/Listen '${PORT}'/g' /etc/apache2/ports.conf && sed -i 's/<VirtualHost \*:80>/<VirtualHost *:'${PORT}'>/g' /etc/apache2/sites-available/000-default.conf && apache2-foreground"]