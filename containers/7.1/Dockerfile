FROM php:7.1-apache
RUN echo 'memory_limit = 2048M' >> /usr/local/etc/php/conf.d/docker-php-memlimit.ini
COPY --from=composer:2.2 /usr/bin/composer /usr/bin/composer
ENV DEBIAN_FRONTEND=noninteractive
RUN apt-get update && apt-get -y install software-properties-common openssh-server sudo libzip-dev libicu-dev git zip unzip apache2 apache2-utils ssl-cert
RUN docker-php-ext-install mysqli zip intl
RUN useradd -rm -d /home/jetbrains -s /bin/bash -g root -G sudo -u 1000 jetbrains
RUN echo 'jetbrains:jetbrains' | chpasswd
RUN pecl install xdebug-2.9.0
RUN docker-php-ext-enable xdebug
RUN echo "xdebug.profiler_enable=0" >> /usr/local/etc/php/php.ini
RUN echo "xdebug.auto_trace=0" >> /usr/local/etc/php/php.ini
RUN echo "xdebug.remote_enable=1" >> /usr/local/etc/php/php.ini
RUN echo "xdebug.remote_autostart=1" >> /usr/local/etc/php/php.ini
#RUN echo "xdebug.remote_host=192.168.178.178" >> /usr/local/etc/php/php.ini
RUN echo "xdebug.remote_host=host.docker.internal" >> /usr/local/etc/php/php.ini
RUN echo "xdebug.default_enable=1" >> /usr/local/etc/php/php.ini
RUN echo "xdebug.coverage_enable=1" >> /usr/local/etc/php/php.ini
RUN echo "xdebug.output_dir=/opt/project/xdebug_snapshots" >> /usr/local/etc/php/php.ini
RUN echo "xdebug.log=/opt/project/xdebug_logs/xdebug29php71.log" >> /usr/local/etc/php/php.ini
RUN echo "xdebug.log_level=11" >> /usr/local/etc/php/php.ini
RUN echo "xdebug.remote_log=/opt/project/xdebug_logs/xdebug29php71.log" >> /usr/local/etc/php/php.ini
RUN echo "xdebug.remote_log_level=11" >> /usr/local/etc/php/php.ini
EXPOSE 80
EXPOSE 443
EXPOSE 22
WORKDIR /var/www/html
COPY starter.sh /
RUN chmod +x /starter.sh
CMD ["/starter.sh"]
