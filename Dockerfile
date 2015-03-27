FROM sameersbn/ubuntu:14.04.20150220
MAINTAINER tomohiro.teranishi@gmail.com


RUN apt-get update
RUN apt-get upgrade -y
RUN apt-get install -y vim php5 php5-mysql apache2 git memcached php5-memcache php5-imagick php5-curl sendmail

# apache2
RUN ln -s /etc/apache2/mods-available/rewrite.load /etc/apache2/mods-enabled/
RUN rm /etc/apache2/sites-enabled/*


COPY assets /app/assets

RUN chmod 755 /app/assets/setup/install-emlauncher
RUN /app/assets/setup/install-emlauncher

RUN chmod 755 /app/assets/setup/init

EXPOSE 80

CMD ["/app/assets/setup/init"]
