FROM php:8.2-apache

# Ativa o mod_rewrite (bem comum em projetos PHP)
RUN a2enmod rewrite

# Garante que SOMENTE o mpm_prefork esteja ativo
RUN a2dismod mpm_event mpm_worker || true \
    && a2enmod mpm_prefork

# Define diretório de trabalho
WORKDIR /var/www/html

# Copia os arquivos do projeto
COPY . /var/www/html/

# Ajusta permissões (Apache no Railway roda como www-data)
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Porta padrão do Apache (Railway detecta)
EXPOSE 80

# Comando padrão (NÃO alterar)
CMD ["apache2-foreground"]
