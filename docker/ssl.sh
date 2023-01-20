#!/bin/bash
cd ssl
touch apache-selfsigned.key
touch apache-selfsigned.crt
cd ..

cp /ssl/apache.key /etc/ssl/private/apache.key
cp /ssl/apache-certificate.crt /etc/ssl/certs/apache-certificate.crt

a2enmod ssl
service apache2 restart

apachectl -D FOREGROUND
