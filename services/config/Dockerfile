FROM php:7.4-fpm-alpine3.13

RUN apk add --no-cache openssl bash mysql-client nodejs npm g++ icu-dev nginx freetype-dev libjpeg-turbo-dev libpng-dev

RUN apk add --no-cache php-sqlite3

RUN docker-php-ext-install pdo pdo_mysql 

RUN docker-php-ext-configure intl && docker-php-ext-install intl  && docker-php-ext-install gd

RUN mkdir -p /run/nginx 

ENV DOCKERIZE_VERSION v0.6.1

RUN wget https://github.com/jwilder/dockerize/releases/download/$DOCKERIZE_VERSION/dockerize-alpine-linux-amd64-$DOCKERIZE_VERSION.tar.gz \
    && tar -C /usr/local/bin -xzvf dockerize-alpine-linux-amd64-$DOCKERIZE_VERSION.tar.gz \
    && rm dockerize-alpine-linux-amd64-$DOCKERIZE_VERSION.tar.gz

WORKDIR /home/cpsandbox/CarPayCakeSites

COPY --chown=www-data:www-data . /home/cpsandbox/CarPayCakeSites

RUN mkdir -p /opt/cpanel/composer/bin/

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/opt/cpanel/composer/bin/ --filename=composer

RUN php composer_install_AllSites.php

RUN mv ./devops/nginx.conf /etc/nginx/conf.d/default.conf

RUN cp ./devops/php.ini $PHP_INI_DIR/php.ini

RUN chmod +x ./devops/entrypoint.sh

EXPOSE 80

CMD [ "devops/entrypoint.sh" ]