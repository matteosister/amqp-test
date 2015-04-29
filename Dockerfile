FROM ubuntu

RUN apt-key adv --keyserver keyserver.ubuntu.com --recv-key 14AA40EC0831756756D7F66C4F4EA0AAE5267A6C
RUN echo "deb http://ppa.launchpad.net/ondrej/php5/ubuntu trusty main" >> /etc/apt/sources.list.d/php.list
RUN apt-get update && apt-get -qqy install php5 php5-cli php5-mcrypt\
    php5-fpm php5-curl php5-sqlite php5-intl && rm -r /var/lib/apt/lists/*

WORKDIR /code