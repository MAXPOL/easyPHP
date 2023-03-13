# easyPHP

For setting easy web server use:

yum install -y httpd mariadb mariadb-server php php-mcrypt php-cli php-gd php-curl php-mysql php-ldap php-zip php-fileinfo

systemctl enable mariadb && systemctl enable httpd && systemctl start mariadb && systemctl start httpd

mysql_secure_installation

ENTER -> Y -> ENTER PASSWORD -> Y -> N -> Y -> Y

firewall-cmd --permanent --zone=public --add-port=80/tcp --add-port=3306/tcp && firewall-cmd --reload

