###################################################################################
# PHP-FPM                                                                         #
###################################################################################
FROM php:8.2-fpm-alpine AS php-fpm

ARG uid
ARG gid
ARG WP_CLI_VERSION=2.6.0

COPY ./docker/php/php-fpm.conf /usr/local/etc/php-fpm.conf
COPY ./docker/php/opcache.ini /usr/local/etc/php/conf.d/opcache.ini

ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/

# supported extensions: https://github.com/mlocati/docker-php-extension-installer
RUN chmod uga+x /usr/local/bin/install-php-extensions \
    && sync \
    && install-php-extensions gd bcmath gettext intl mysqli pdo_mysql zip

RUN wget -q https://github.com/wp-cli/wp-cli/releases/download/v${WP_CLI_VERSION}/wp-cli-${WP_CLI_VERSION}.phar \
    && chmod 755 wp-cli-${WP_CLI_VERSION}.phar \
    && mv wp-cli-${WP_CLI_VERSION}.phar /usr/local/bin/wp

RUN apk update \
    && apk add --no-cache mysql-client bash bats less