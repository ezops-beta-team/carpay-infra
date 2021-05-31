FROM php:7.4-fpm-alpine3.13

ARG APP_FOLDER
ARG AWS_ACCESS_KEY_ID
ARG AWS_SECRET_ACCESS_KEY
ARG DEFAULT_REGION

RUN apk add --no-cache openssl bash mysql-client nodejs npm g++ icu-dev nginx php-bcmath pcre-dev ${PHPIZE_DEPS} \
    freetype-dev libjpeg-turbo-dev libpng-dev php-sqlite3 php7-pear php7-dev gcc musl-dev make \
    && pecl install xdebug-2.8.1 redis-5.1.1 scrypt-1.4.2 \
    && docker-php-ext-install pdo pdo_mysql && docker-php-ext-configure intl && docker-php-ext-install intl && docker-php-ext-install gd \
    && docker-php-ext-enable redis xdebug scrypt \
    && echo "xdebug.remote_enable=on" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.remote_autostart=off" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.remote_port=9001" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.remote_handler=dbgp" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.remote_connect_back=0" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini 

RUN mkdir -p /run/nginx
RUN apk add --no-cache \
        python3 \
        py3-pip \
    && pip3 install --upgrade pip \
    && pip3 install \
        awscli \
    && rm -rf /var/cache/apk/*

ENV DOCKERIZE_VERSION v0.6.1

RUN wget https://github.com/jwilder/dockerize/releases/download/$DOCKERIZE_VERSION/dockerize-alpine-linux-amd64-$DOCKERIZE_VERSION.tar.gz \
    && tar -C /usr/local/bin -xzvf dockerize-alpine-linux-amd64-$DOCKERIZE_VERSION.tar.gz \
    && rm dockerize-alpine-linux-amd64-$DOCKERIZE_VERSION.tar.gz \
    && wget -O /usr/local/bin/phpunit https://phar.phpunit.de/phpunit-6.phar && chmod +x /usr/local/bin/phpunit

WORKDIR /home/cpsandbox/versions/dev/CarPayCakeSites

COPY --chown=www-data:www-data . /home/cpsandbox/versions/dev/CarPayCakeSites

RUN mkdir -p /opt/cpanel/composer/bin/ \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/opt/cpanel/composer/bin/ --filename=composer \
    && mv ./devops/nginx.conf /etc/nginx/conf.d/default.conf \
    && mkdir -p /etc/nginx/conf.ext \
    && cp ./devops/php.ini $PHP_INI_DIR/php.ini \
    && aws configure import --csv file://credentials.csv\
    && chmod +x ./entrypoint.sh

EXPOSE 80 9000

CMD [ "./entrypoint.sh" ]