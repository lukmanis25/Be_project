apt update
apt-get install openssl

a2enmod ssl
a2enmod rewrite
systemctl restart apache2

mkdir /etc/apache2/certificate
cd /etc/apache2/certificate
openssl req -newkey rsa:2048 -new -nodes -x509 -days 365 -keyout apache-selfsigned.key -out apache-selfsigned.crt -subj "/C=PL/ST=Pomerania/L=Gdansk/O=PG/OU=./CN=127.0.0.1"

cp /ssl/000-default.conf /etc/apache2/sites-available/000-default.conf
cp /ssl/default-ssl.conf /etc/apache2/sites-available/default-ssl.conf

sudo a2enmod ssl
sudo a2enmod headers
sudo a2ensite default-ssl
systemctl restart apache2
