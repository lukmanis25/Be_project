FROM alpine as intermediate

RUN apk update
RUN apk add git

RUN git clone --single-branch https://github.com/lukmanis25/Be_project


FROM prestashop/prestashop:1.7.8.7

COPY --from=intermediate --chmod=777 /Be_project/source/presta /var/www/html

ARG DATABASE_HOST=mariadb
ARG DATABASE_PORT=''
ARG DATABASE_NAME=prestashop
ARG DATABASE_USER=root
ARG DATABASE_PASSWORD=haslo
ARG DATABASE_PREFIX=ps_

RUN rm -rf install/

RUN sed -i "s|'127.0.0.1'|'${DATABASE_HOST}'|g" /var/www/html/app/config/parameters.php
RUN sed -i "s|''|'${DATABASE_PORT}'|g" /var/www/html/app/config/parameters.php
RUN sed -i "s|'prestashop'|'${DATABASE_NAME}'|g" /var/www/html/app/config/parameters.php
RUN sed -i "s|'database_user' => 'root'|'database_user' => '${DATABASE_USER}'|g" /var/www/html/app/config/parameters.php
RUN sed -i "s|'database_password' => 'haslo'|'database_password' => '${DATABASE_PASSWORD}'|g" /var/www/html/app/config/parameters.php
RUN sed -i "s|'ps_'|'${DATABASE_PREFIX}'|g" /var/www/html/app/config/parameters.php 

RUN cd ~
RUN mkdir ssl
COPY --from=intermediate --chmod=777 /Be_project/docker/000-default.conf /ssl/000-default.conf
COPY --from=intermediate --chmod=777 /Be_project/docker/default-ssl.conf /ssl/default-ssl.conf
COPY --from=intermediate --chmod=777 /Be_project/docker/actual.sql /ssl/actual.sql
COPY --from=intermediate --chmod=777 /Be_project/docker/apache.key /ssl/apache.key
COPY --from=intermediate --chmod=777 /Be_project/docker/apache-certificate.crt /ssl/apache-certificate.crt


EXPOSE 80
EXPOSE 443

RUN cp /ssl/apache.key /etc/ssl/private/apache.key
RUN cp /ssl/apache-certificate.crt /etc/ssl/certs/apache-certificate.crt
RUN cp /ssl/000-default.conf /etc/apache2/sites-available/000-default.conf
RUN cp /ssl/default-ssl.conf /etc/apache2/sites-available/default-ssl.conf

#RUN mysql -u $DATABASE_USER -p$DATABASE_PASSWORD $DATABASE_NAME < /ssl/actual.sql

RUN a2enmod ssl
RUN service apache2 restart
