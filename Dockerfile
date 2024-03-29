FROM php:8.0-apache

COPY . /var/www/html/
WORKDIR /var/www/html/

RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN apt-get update && apt-get upgrade -y

EXPOSE 8000

CMD [ "php", "./index.php" ]

# Run your application
#CMD php-fpm
#CMD ["php", "./registracija.php"]
