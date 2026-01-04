FROM php:8.2-apache

ENV PORT=8080

# Ajusta Apache para porta 8080
RUN sed -i 's/80/8080/g' /etc/apache2/ports.conf \
 && sed -i 's/:80/:8080/g' /etc/apache2/sites-available/000-default.conf

# Remove TODOS os MPMs para evitar conflito
RUN a2dismod mpm_event mpm_worker mpm_prefork || true

# Ativa SOMENTE o MPM correto para PHP
RUN a2enmod mpm_prefork rewrite

# Copia os arquivos do projeto
COPY . /var/www/html/

# Permissões
RUN chown -R www-data:www-data /var/www/html \
 && chmod -R 755 /var/www/html

EXPOSE 8080

# Mantém o Apache rodando
CMD ["apachectl", "-D", "FOREGROUND"]
