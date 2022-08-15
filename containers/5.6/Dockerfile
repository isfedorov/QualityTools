FROM php:5.6-apache
RUN echo 'memory_limit = 2048M' >> /usr/local/etc/php/conf.d/docker-php-memlimit.ini
COPY --from=composer:2.2 /usr/bin/composer /usr/bin/composer
RUN apt-get update && apt-get -y install git zip unzip apache2 apache2-utils ssl-cert
RUN docker-php-ext-install mysqli
RUN pecl install xdebug-2.5.0
RUN docker-php-ext-enable xdebug
RUN echo "xdebug.profiler_enable=0" >> /usr/local/etc/php/php.ini
RUN echo "xdebug.auto_trace=0" >> /usr/local/etc/php/php.ini
RUN echo "xdebug.remote_enable=1" >> /usr/local/etc/php/php.ini
RUN echo "xdebug.remote_autostart=1" >> /usr/local/etc/php/php.ini
RUN echo "xdebug.remote_host=docker.host.internal" >> /usr/local/etc/php/php.ini
RUN echo "xdebug.default_enable=1" >> /usr/local/etc/php/php.ini
RUN echo "xdebug.coverage_enable=1" >> /usr/local/etc/php/php.ini
RUN echo "xdebug.output_dir=/opt/project/xdebug_snapshots" >> /usr/local/etc/php/php.ini
RUN echo "xdebug.log=/opt/project/xdebug_logs/xdebug25php56.log" >> /usr/local/etc/php/php.ini
RUN echo "xdebug.remote_log=/opt/project/xdebug_logs/xdebug25php56.log" >> /usr/local/etc/php/php.ini
EXPOSE 80
EXPOSE 443
WORKDIR /var/www/html
CMD ["apache2ctl", "-D", "FOREGROUND"]