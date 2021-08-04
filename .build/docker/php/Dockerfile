FROM php:7.4-zts

WORKDIR /app

RUN apt-get update
RUN apt-get install libpthread-stubs0-dev
RUN pecl install parallel
RUN docker-php-ext-enable parallel

CMD ["php", "-S", "0.0.0.0:8080", "-t", "/app"]