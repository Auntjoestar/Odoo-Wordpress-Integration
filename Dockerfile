FROM wordpress:latest

# install xdebug
RUN pecl install xdebug

# install wp-cli
RUN curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar && \
    chmod +x wp-cli.phar && \
    mv wp-cli.phar /usr/local/bin/wp

# Copy xdebug.ini into the container
COPY xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini

COPY wp_data/phpinfo.php /var/www/html/phpinfo.php
