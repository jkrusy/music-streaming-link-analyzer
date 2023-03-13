FROM php:8.1-cli-buster AS phpunit
RUN apt update && apt install -y wget \
    && wget -O phpunit.phar https://phar.phpunit.de/phpunit-10.phar \
    && chmod +x phpunit.phar \
    && mv phpunit.phar /usr/local/bin/phpunit

FROM php:8.1-cli-buster
COPY --from=phpunit /usr/local/bin/phpunit /usr/local/bin/phpunit
