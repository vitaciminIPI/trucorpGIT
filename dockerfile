FROM php:7.4-apache

COPY index2.php /var/www/html

RUN chmod -R 774 /var/www/html

RUN chown -R www-data:www-data /var/www/html

RUN docker-php-ext-install mysqli

RUN docker-php-ext-enable mysqli
