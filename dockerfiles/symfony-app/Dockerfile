#
# symfony-app
#

FROM phpmentors/symfony-app
MAINTAINER Stuart Coope <me@stu.io>

RUN usermod -u 1000 www-data
RUN mkdir -p /var/app/app/cache
RUN mkdir -p /var/app/app/logs
RUN chown -R www-data:www-data /var/app/app/cache
RUN chown -R www-data:www-data /var/app/app/logs

