FROM php:8.2-apache

RUN docker-php-ext-install mysqli

COPY upload/ /var/www/html/

# Create writable OpenCart directories
RUN mkdir -p /var/www/html/system/storage/cache \
    /var/www/html/system/storage/logs \
    /var/www/html/system/storage/session \
    /var/www/html/system/storage/upload \
    /var/www/html/image/cache

# Set permissions for Apache/OpenCart
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html \
    && chmod -R 775 /var/www/html/system/storage \
    && chmod -R 775 /var/www/html/image

# Enable Apache rewrite
RUN a2enmod rewrite

# Allow .htaccess
RUN sed -i 's/AllowOverride None/AllowOverride All/g' /etc/apache2/apache2.conf

# Remove Apache warning
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

EXPOSE 80

CMD ["apache2-foreground"]