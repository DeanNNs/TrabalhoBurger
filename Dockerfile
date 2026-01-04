FROM php:8.1-apache

# Diretório do site
WORKDIR /var/www/html

# Copia todos os arquivos do projeto
COPY . .

# Extensão do MySQL
RUN docker-php-ext-install mysqli

# Habilita rewrite
RUN a2enmod rewrite

# Porta dinâmica do Railway
ENV PORT=8080
EXPOSE 8080

# Apache escutando a porta do Railway
RUN sed -i 's/80/${PORT}/g' /etc/apache2/ports.conf \
 && sed -i 's/:80/:${PORT}/g' /etc/apache2/sites-available/000-default.conf
