# easyPHP

For setting easy web server use:

yum install -y httpd nano wget unzip mariadb mariadb-server php php-mcrypt php-cli php-gd php-curl php-mysql php-ldap php-zip php-fileinfo php-mbstring

systemctl enable mariadb && systemctl enable httpd && systemctl start mariadb && systemctl start httpd

mysql_secure_installation

ENTER -> Y -> ENTER PASSWORD -> Y -> N -> Y -> Y

firewall-cmd --permanent --zone=public --add-port=80/tcp --add-port=3306/tcp && firewall-cmd --reload

cd /var/www/html

wget https://files.phpmyadmin.net/phpMyAdmin/4.4.5/phpMyAdmin-4.4.5-all-languages.zip

unzip  phpMyAdmin*

mv phpMyAdmin-4.4.5-all-languages pma

rm -rf *.zip

Inside phpMyAdmin create DB ***NAME*** | utf8_general_ci

CREATE TABLE students

id INT AI / firstname VARCHAR(100) / lastname VARCHAR(100) / surname VARCHAR(100) / address TEXT / phone TEXT / other TEXT

