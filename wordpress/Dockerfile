FROM wordpress

COPY wp-files/wp-config.php /var/www/html/
COPY wp-files/composer.json /var/www/html/

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && \
    php composer-setup.php && \
    php -r "unlink('composer-setup.php');" && \
    mv composer.phar /usr/local/bin/composer