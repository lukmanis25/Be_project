#!/bin/bash
find themes/etrendlite/mails -type f -exec sed -i "s/localhost/localhost/" {} \;
cd ssl
touch apache-selfsigned.key
touch apache-selfsigned.crt
cd ..
rm -rf /etc/apache2/sites-available/000-default.conf
cp /ssl/000-default.conf /etc/apache2/sites-available/000-default.conf
openssl req -newkey rsa:2048 -new -nodes -x509 -days 365 -keyout /ssl/apache-selfsigned.key -out /ssl/apache-selfsigned.crt -subj "/C=PL/ST=Pomerania/L=Gdansk/O=PG/OU=./CN=."
cp /ssl/apache-selfsigned.key /etc/ssl/private/apache-selfsigned.key
cp /ssl/apache-selfsigned.crt /etc/ssl/certs/apache-selfsigned.crt


DATABASE_NAME="prestashop"
DATABASE_USER="root"
DATABASE_PASSWORD="haslo"
DATABASE_ROOT_PASSWORD="haslo"
SHOP_URL="localhost"
SHOP_SSL_URL="localhost"

mysql -p$DATABASE_ROOT_PASSWORD -e "CREATE DATABASE IF NOT EXISTS ${DATABASE_NAME};"
mysql -p$DATABASE_ROOT_PASSWORD -e "CREATE USER IF NOT EXISTS ${DATABASE_USER}@'%' IDENTIFIED BY '${DATABASE_PASSWORD}';"
mysql -p$DATABASE_ROOT_PASSWORD -e "GRANT ALL PRIVILEGES ON ${DATABASE_NAME}.* TO '${DATABASE_USER}'@'%';"
mysql -p$DATABASE_ROOT_PASSWORD -e "FLUSH PRIVILEGES;"
mysql -u $DATABASE_USER -p$DATABASE_PASSWORD $DATABASE_NAME < /ssl/dump.sql

mysql -u $DATABASE_USER -p$DATABASE_PASSWORD $DATABASE_NAME -e "UPDATE ps_shop_url SET domain='${SHOP_URL}', domain_ssl='${SHOP_SSL_URL}' WHERE id_shop_url=1;"
mysql -u $DATABASE_USER -p$DATABASE_PASSWORD $DATABASE_NAME -e "UPDATE ps_homeslider_slides_lang SET url=REPLACE(url, 'localhost', '${SHOP_SSL_URL}');"
mysql -u $DATABASE_USER -p$DATABASE_PASSWORD $DATABASE_NAME -e "UPDATE ps_configuration_lang SET value=REPLACE(value, 'localhost', '${SHOP_SSL_URL}') WHERE id_configuration=434;"


a2enmod ssl
a2enmod rewrite
service apache2 restart

apachectl -D FOREGROUND