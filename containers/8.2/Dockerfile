FROM php:8.2.0-apache
RUN echo 'memory_limit = 2048M' >> /usr/local/etc/php/conf.d/docker-php-memlimit.ini
COPY --from=composer /usr/bin/composer /usr/bin/composer
RUN apt-get update -y && \
    apt-get install git -y && \
    git clone https://github.com/xdebug/xdebug
WORKDIR xdebug
RUN phpize && \
    chmod +x configure && \
    ./configure --enable-xdebug && \
    make && \
    make install
RUN docker-php-ext-enable xdebug
#RUN pecl install xdebug
#RUN docker-php-ext-enable xdebug
RUN echo "xdebug.mode=develop,debug,coverage" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
#RUN echo "xdebug.remote_host=192.168.178.178" >> /usr/local/etc/php/php.ini
RUN echo "xdebug.client_host=host.docker.internal" >> /usr/local/etc/php/php.ini
RUN echo "xdebug.start_with_request=yes" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
RUN echo "xdebug.output_dir=/opt/project/xdebug_snapshots" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
RUN echo "xdebug.log=/opt/project/xdebug_logs/xdebug33php82.log" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
EXPOSE 80
EXPOSE 443
EXPOSE 22
WORKDIR /var/www/html
COPY starter.sh /
RUN chmod +x /starter.sh
CMD ["/starter.sh"]