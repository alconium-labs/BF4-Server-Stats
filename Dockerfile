FROM php:8.5-apache

WORKDIR /var/www/html

RUN apt-get update \
    && apt-get install -y --no-install-recommends \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
        libzip-dev \
        libonig-dev \
        libxml2-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j"$(nproc)" \
        bcmath \
        gd \
        mbstring \
        mysqli \
        pdo_mysql \
        xml \
        zip \
    && cp "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini" \
    && rm -rf /var/lib/apt/lists/*

COPY . /var/www/html

RUN a2enmod remoteip

RUN echo "RemoteIPHeader X-Forwarded-For\nRemoteIPInternalProxy 10.0.0.0/8 172.16.0.0/12 192.168.0.0/16" > /etc/apache2/conf-available/remoteip.conf \
    && a2enconf remoteip

RUN sed -i 's/%h/%a/g' /etc/apache2/apache2.conf

RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html/common/server-banner/cache

EXPOSE 80
