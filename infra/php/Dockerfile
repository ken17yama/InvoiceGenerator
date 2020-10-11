FROM php:7.3-fpm-buster
SHELL ["/bin/bash", "-oeux", "pipefail", "-c"]

ENV COMPOSER_ALLOW_SUPERUSER=1 \
	COMPOSER_HOME=/composer

COPY --from=composer:1.10 /usr/bin/composer /usr/bin/composer

RUN apt-get update && apt-get install -y \
	git unzip libzip-dev libicu-dev libonig-dev \
	libfreetype6-dev \
	libjpeg62-turbo-dev \
	libpng-dev && \
	apt-get clean && \
	rm -rf /var/lib/apt/lists/* && \
	docker-php-ext-configure gd --with-freetype-dir --with-jpeg-dir && \
	docker-php-ext-install intl pdo_mysql zip bcmath -j$(nproc) gd

COPY ./php.ini /usr/local/etc/php/php.ini

WORKDIR /work
