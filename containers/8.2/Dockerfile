FROM php:8.2-apache
RUN echo 'memory_limit = 2048M' >> /usr/local/etc/php/conf.d/docker-php-memlimit.ini
COPY --from=composer /usr/bin/composer /usr/bin/composer
ENV DEBIAN_FRONTEND=noninteractive
RUN apt-get update && apt-get -y install software-properties-common openssh-server sudo git libzip-dev zip libicu-dev \
    unzip apache2 apache2-utils ssl-cert iputils-ping rsync wget
RUN docker-php-ext-install mysqli zip intl
RUN pecl install xdebug
RUN docker-php-ext-enable xdebug
RUN useradd -rm -d /home/jetbrains -s /bin/bash -g root -G sudo -u 1000 jetbrains
RUN  echo 'jetbrains:jetbrains' | chpasswd
RUN echo "xdebug.mode=develop,debug,coverage" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
#RUN echo "xdebug.remote_host=192.168.178.178" >> /usr/local/etc/php/php.ini
RUN echo "xdebug.client_host=host.docker.internal" >> /usr/local/etc/php/php.ini
RUN echo "xdebug.start_with_request=yes" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
RUN echo "xdebug.output_dir=/opt/project/xdebug_snapshots" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
RUN echo "xdebug.log=/opt/project/xdebug_logs/xdebug33php82.log" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
RUN a2enmod ssl
RUN a2enmod socache_shmcb
RUN a2ensite default-ssl.conf
WORKDIR /tmp
RUN wget -O phpunit https://phar.phpunit.de/phpunit-10.phar
RUN chmod +x phpunit
EXPOSE 80
EXPOSE 443
EXPOSE 22
WORKDIR /var/www/html
COPY starter.sh /
RUN chmod +x /starter.sh
CMD ["/starter.sh"]
