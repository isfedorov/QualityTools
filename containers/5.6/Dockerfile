FROM php:5.6-apache
RUN echo 'memory_limit = 2048M' >> /usr/local/etc/php/conf.d/docker-php-memlimit.ini
COPY --from=composer:2.2 /usr/bin/composer /usr/bin/composer
ENV DEBIAN_FRONTEND=noninteractive
RUN sed -i -e 's/deb.debian.org/archive.debian.org/g' \
           -e 's|security.debian.org|archive.debian.org/|g' \
           -e '/stretch-updates/d' /etc/apt/sources.list
RUN apt-get update && apt-get -y install software-properties-common openssh-server sudo libzip-dev libicu-dev git zip unzip apache2 apache2-utils ssl-cert
RUN useradd -rm -d /home/jetbrains -s /bin/bash -g root -G sudo -u 1000 jetbrains
RUN echo 'jetbrains:jetbrains' | chpasswd
RUN docker-php-ext-install mysqli zip intl
RUN pecl install xdebug-2.5.0
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
RUN echo "xdebug.log=/opt/project/xdebug_logs/xdebug25php56.log" >> /usr/local/etc/php/php.ini
RUN echo "xdebug.remote_log=/opt/project/xdebug_logs/xdebug25php56.log" >> /usr/local/etc/php/php.ini
EXPOSE 80
EXPOSE 443
EXPOSE 22
WORKDIR /var/www/html
COPY starter.sh /
RUN chmod +x /starter.sh
CMD ["/starter.sh"]
