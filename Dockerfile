FROM sameersbn/ubuntu:14.04.20150220
MAINTAINER tomohiro.teranishi@gmail.com


RUN apt-get update
RUN apt-get install -y apache2 git php5 php5-mysql memcached php5-memcache php5-imagick php5-curl sendmail

WORKDIR /home
RUN git clone https://github.com/KLab/emlauncher.git 

WORKDIR /home/emlauncher
RUN pwd \
    git submodule init \
    git submodule update 


ADD asserts/config/emlauncher_config.php /home/emlauncher/config/emlauncher_config.php
ADD asserts/config/mfw_serverenv_config.php /home/emlauncher/config/mfw_serverenv_config.php
ADD asserts/config/dbauth /home/emlauncher/config/dbauth
ADD asserts/apache2/default.conf /etc/apache2/sites-enabled/default.conf

# apache2
RUN ln -s /etc/apache2/mods-available/rewrite.load /etc/apache2/mods-enabled/
RUN chown -R www-data:www-data /home/emlauncher

RUN sed 's/{{DB_HOST}}/'"${DB_HOST}"'/' -i /home/emlauncher/config/mfw_serverenv_config.php

