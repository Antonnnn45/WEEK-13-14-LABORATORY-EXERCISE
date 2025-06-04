FROM php:8.1-apache


RUN docker-php-ext-install pdo pdo_mysql


RUN a2enmod rewrite


RUN sed -i '/<Directory \/var\/www\/>/,/<\/Directory>/ s/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf


COPY . /var/www/html/


RUN chown -R www-data:www-data /var/www/html/


EXPOSE 80
