FROM php:7.1
RUN echo 'memory_limit = 1024M' >> /usr/local/etc/php/conf.d/docker-php-memlimit.ini
COPY --from=composer /usr/bin/composer /usr/bin/composer
RUN apt-get update && apt-get -y install git zip unzip
RUN docker-php-ext-install mysqli
RUN pecl install xdebug-2.9.0
RUN docker-php-ext-enable xdebug
RUN echo "xdebug.profiler_enable=0" >> /usr/local/etc/php/php.ini
RUN echo "xdebug.auto_trace=0" >> /usr/local/etc/php/php.ini
RUN echo "xdebug.remote_enable=1" >> /usr/local/etc/php/php.ini
RUN echo "xdebug.remote_host=docker.host.internal" >> /usr/local/etc/php/php.ini
RUN echo "xdebug.default_enable=1" >> /usr/local/etc/php/php.ini
RUN echo "xdebug.coverage_enable=1" >> /usr/local/etc/php/php.ini
RUN echo "xdebug.output_dir=/opt/project/xdebug_snapshots" >> /usr/local/etc/php/php.ini
RUN echo "xdebug.log=/opt/project/xdebug_logs/xdebug29php71.log" >> /usr/local/etc/php/php.ini