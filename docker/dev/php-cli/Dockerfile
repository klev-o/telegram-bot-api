FROM php:7.4-cli-alpine

RUN apk add --no-cache unzip

RUN docker-php-ext-install pdo pdo_mysql

RUN mv $PHP_INI_DIR/php.ini-development $PHP_INI_DIR/php.ini

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/bin --filename=composer --quiet

RUN addgroup -g 1000 app && adduser -u 1000 -G app -s /bin/sh -D app

WORKDIR /app

USER app