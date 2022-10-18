FROM php:7.4-apache
RUN echo 'memory_limit = 2048M' >> /usr/local/etc/php/conf.d/docker-php-memlimit.ini
COPY --from=composer /usr/bin/composer /usr/bin/composer
ENV DEBIAN_FRONTEND=noninteractive
RUN apt-get update && apt-get -y install software-properties-common openssh-server sudo git zip unzip apache2 apache2-utils ssl-cert
RUN docker-php-ext-install mysqli
RUN useradd -rm -d /home/jetbrains -s /bin/bash -g root -G sudo -u 1000 jetbrains
RUN echo 'jetbrains:jetbrains' | chpasswd
RUN pecl install xdebug-3.0.3
RUN docker-php-ext-enable xdebug
RUN echo "xdebug.mode=debug" >> /usr/local/etc/php/php.ini
RUN echo "xdebug.client_host=host.docker.internal" >> /usr/local/etc/php/php.ini
RUN echo "xdebug.start_with_request=yes" >> /usr/local/etc/php/php.ini
RUN echo "xdebug.output_dir=/opt/project/xdebug_snapshots" >> /usr/local/etc/php/php.ini
RUN echo "xdebug.log=/opt/project/xdebug_logs/xdebug30php74.log" >> /usr/local/etc/php/php.ini
RUN a2enmod ssl
RUN a2enmod socache_shmcb
RUN a2ensite default-ssl.conf
RUN service ssh start
EXPOSE 80
EXPOSE 443
EXPOSE 22
CMD ["/usr/sbin/sshd","-D"]
CMD ["apache2ctl", "-D", "FOREGROUND"]
WORKDIR /var/www/html