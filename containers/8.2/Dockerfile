FROM php:8.2-rc-apache
RUN echo 'memory_limit = 2048M' >> /usr/local/etc/php/conf.d/docker-php-memlimit.ini
COPY --from=composer /usr/bin/composer /usr/bin/composer
#RUN pecl install xdebug
#RUN docker-php-ext-enable xdebug
#RUN echo "xdebug.mode=develop,debug,coverage" >> /usr/local/etc/php/php.ini
#RUN echo "xdebug.start_with_request=yes" >> /usr/local/etc/php/php.ini
#RUN echo "xdebug.output_dir=/opt/project/xdebug_snapshots" >> /usr/local/etc/php/php.ini
#RUN echo "xdebug.log=/opt/project/xdebug_logs/xdebug31php81.log" >> /usr/local/etc/php/php.ini
WORKDIR /var/www/html