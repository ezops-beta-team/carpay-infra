FROM php:7.3-fpm-alpine3.8

RUN apk add --no-cache openssl bash mysql-client nodejs npm g++ icu-dev nginx freetype-dev libjpeg-turbo-dev libpng-dev

RUN apk add --no-cache php-sqlite3 pdftk

RUN docker-php-ext-install pdo pdo_mysql 

RUN docker-php-ext-configure intl && docker-php-ext-install intl && docker-php-ext-install gd

RUN mkdir -p /run/nginx 

WORKDIR /home/cpsandbox/CarPayCakeSites

COPY --chown=www-data:www-data . /home/cpsandbox/CarPayCakeSites

RUN mkdir -p /opt/cpanel/composer/bin/

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/opt/cpanel/composer/bin/ --filename=composer

RUN php composer_install_AllSites.php

RUN mv nginx.conf /etc/nginx/conf.d/default.conf

RUN cp php.ini $PHP_INI_DIR/php.ini

RUN chmod +x entrypoint.sh

EXPOSE 80

CMD ["/home/cpsandbox/CarPayCakeSites/entrypoint.sh"]