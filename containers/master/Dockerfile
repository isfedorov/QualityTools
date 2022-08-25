FROM ubuntu:latest
RUN apt-get update && apt-get -y install openssh-server lsb-release apt-transport-https ca-certificates wget git  \
    autoconf dpkg-dev file g++ gcc libc-dev ca-certificates curl bison re2c pkg-config libxml2-dev  \
    libsqlite3-dev make xz-utils vim
RUN useradd -rm -d /home/jetbrains -s /bin/bash -g root -G sudo -u 1000 jetbrains
RUN  echo 'jetbrains:jetbrains' | chpasswd
COPY ./entrypoint.sh /home/jetbrains
WORKDIR /home/jetbrains
EXPOSE 22

ENTRYPOINT ["/home/jetbrains/entrypoint.sh"]
