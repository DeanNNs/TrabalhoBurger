# Imagem base com PHP + Apache
FROM php:8.2-apache

# Define a porta usada pelo Railway
ENV PORT=8080

# Muda o Apache para escutar na porta 8080
RUN sed -i 's/80/8080/g' /etc/apache2/ports.conf \
 && sed -i 's/:80/:8080/g' /etc/apache2/sites-available/000-default.conf

# Habilita módulos comuns do Apache
RUN a2enmod rewrite

# Copia os arquivos do projeto para o Apache
COPY . /var/www/html/

# Define permissões corretas
RUN chown -R www-data:www-data /var/www/html \
 && chmod -R 755 /var/www/html

# Expõe a porta usada pelo Railway
EXPOSE 8080

# COMANDO MAIS IMPORTANTE (não deixa o container morrer)
CMD ["apachectl", "-D", "FOREGROUND"]
