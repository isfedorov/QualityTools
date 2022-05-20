FROM php:7.4
RUN echo 'memory_limit = 1024M' >> /usr/local/etc/php/conf.d/docker-php-memlimit.ini
COPY --from=composer /usr/bin/composer /usr/bin/composer
RUN apt-get update && apt-get -y install git zip unzip
RUN docker-php-ext-install mysqli
RUN pecl install xdebug-3.0.3
RUN docker-php-ext-enable xdebug
RUN echo "xdebug.mode=develop,debug,coverage" >> /usr/local/etc/php/php.ini
RUN echo "xdebug.output_dir=/opt/project/xdebug_snapshots" >> /usr/local/etc/php/php.ini
RUN echo "xdebug.log=/opt/project/xdebug_logs/xdebug30php74.log" >> /usr/local/etc/php/php.ini