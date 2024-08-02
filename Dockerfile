FROM php:apache

WORKDIR /var/www/html

RUN apt update -y

# Install Postgre PDO
RUN apt-get install -y libpq-dev \
    && docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
    && docker-php-ext-install pdo pdo_pgsql pgsql

# Enabling rewrite in Apache
RUN a2enmod rewrite

COPY . .

EXPOSE 80

CMD ["apache2-foreground"]
