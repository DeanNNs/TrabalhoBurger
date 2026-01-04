FROM php:8.2-apache

# 1. Instala extensões PHP necessárias
RUN docker-php-ext-install mysqli pdo pdo_mysql

# 2. Habilita o mod_rewrite (importante para muitas aplicações PHP)
RUN a2enmod rewrite

# 3. Copia os arquivos do projeto
COPY . /var/www/html/

# 4. Ajusta as permissões
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# 5. Ajusta a porta do Apache para usar a variável do Railway dinamicamente
# Fazemos isso via comando para garantir que o Apache escute na porta correta
RUN sed -i 's/80/${PORT}/g' /etc/apache2/sites-available/000-default.conf /etc/apache2/ports.conf

# O comando padrão da imagem já inicia o apache no modo correto
CMD ["apache2-foreground"]