FROM php:5.6-cli

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php composer-setup.php \
    && php -r "unlink('composer-setup.php');" \
    && mv ./composer.phar /usr/local/bin/composer

RUN apt-get update && apt-get install git zip unzip nano vim libsodium-dev gnupg -y

COPY php.ini /usr/local/etc/php/
WORKDIR /app

CMD tail -f /dev/null
EXPOSE 5000
