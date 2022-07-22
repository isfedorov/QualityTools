FROM ubuntu:latest
ENV DEBIAN_FRONTEND=noninteractive
RUN apt update && apt install  openssh-server sudo software-properties-common -y
RUN add-apt-repository -y ppa:ondrej/php
RUN apt update && apt-get install php-dev php-pear rsync php8.1-cli php8.1-cgi php8.1-xdebug php8.1-common php8.1-xml php8.1-mbstring php8.1-intl -y
RUN useradd -rm -d /home/jetbrains -s /bin/bash -g root -G sudo -u 1000 jetbrains
RUN  echo 'jetbrains:jetbrains' | chpasswd
RUN pecl install xdebug
RUN echo "xdebug.mode=develop,debug,coverage" >> /etc/php/8.1/cli/php.ini
RUN echo "xdebug.start_with_request=yes" >> /etc/php/8.1/cli/php.ini
RUN echo "xdebug.output_dir=/home/jetbrains/xdebug_snapshots" >> /etc/php/8.1/cli/php.ini
RUN echo "xdebug.log=/home/jetbrains/xdebug_logs/xdebug31php80.log" >> /etc/php/8.1/cli/php.ini
RUN service ssh start
EXPOSE 22
CMD ["/usr/sbin/sshd","-D"]
WORKDIR /var/www/html
