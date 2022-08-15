FROM php:8.0-apache
RUN echo 'memory_limit = 2048M' >> /usr/local/etc/php/conf.d/docker-php-memlimit.ini
COPY --from=composer /usr/bin/composer /usr/bin/composer
RUN apt-get update && apt-get -y install git zip unzip apache2 apache2-utils ssl-cert libicu-dev php-intl
RUN docker-php-ext-install mysqli
RUN pecl install xdebug-3.1.2
RUN docker-php-ext-enable xdebug
RUN echo "xdebug.mode=develop,debug,coverage" >> /usr/local/etc/php/php.ini
RUN echo "xdebug.start_with_request=yes" >> /usr/local/etc/php/php.ini
RUN echo "xdebug.output_dir=/opt/project/xdebug_snapshots" >> /usr/local/etc/php/php.ini
RUN echo "xdebug.log=/opt/project/xdebug_logs/xdebug31php80.log" >> /usr/local/etc/php/php.ini
RUN a2enmod ssl
RUN a2enmod socache_shmcb
RUN a2ensite default-ssl.conf
WORKDIR /var/www/html
EXPOSE 80
EXPOSE 443
CMD ["apache2ctl", "-D", "FOREGROUND"]