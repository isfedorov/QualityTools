FROM ubuntu:latest

# Set environment variables
ENV DEBIAN_FRONTEND=noninteractive

# Install dependencies required to build PHP from source, Apache, and other essential tools
RUN apt-get update && \
    apt-get install -y git build-essential autoconf pkgconf re2c bison libxml2-dev libsqlite3-dev libonig-dev libzip-dev \
                       curl libcurl4-openssl-dev libssl-dev libapache2-mod-php apache2 apache2-dev libpng-dev libjpeg-dev libfreetype-dev libwebp-dev libxpm-dev


# Clone the PHP repository from GitHub
RUN git clone https://github.com/php/php-src.git /usr/src/php-src

# Checkout to the master branch
WORKDIR /usr/src/php-src
RUN git checkout master

# Build PHP from source
RUN ./buildconf --force && \
    ./configure \
        --enable-option-checking=fatal \
        --enable-mbstring \
        --with-config-file-path="/usr/local/etc/php" \
        --with-config-file-scan-dir="/usr/local/etc/php/conf.d" \
        --disable-cgi \
        --enable-gd \
        --with-webp \
        --with-jpeg \
        --with-xpm \
        --with-freetype \
        --with-zip \
        --with-pdo-mysql \
        --with-iconv \
        --with-mysqli=mysqlnd \
        --with-openssl \
        --with-curl \
        --with-apxs2=/usr/bin/apxs \
        --with-zlib && \
    make -j "$(nproc)" && \
    make install

# Create the php-module.conf file
RUN echo "LoadModule php_module /usr/lib/apache2/modules/libphp.so" > /etc/apache2/mods-available/php-module.load

# Enable Apache mods
RUN a2enmod rewrite && \
    a2enmod php-module

# Copy custom Apache virtual host configuration
COPY apache-vhost.conf /etc/apache2/sites-available/000-default.conf

# Create required directories for PHP configuration
RUN mkdir -p /usr/local/etc/php/conf.d

# Copy custom PHP configuration
COPY php.ini /usr/local/etc/php/php.ini

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
# Enable xdebug extension
RUN echo "zend_extension=$(php-config --extension-dir)/xdebug.so" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
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
