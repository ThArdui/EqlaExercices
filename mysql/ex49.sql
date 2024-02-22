revoke all privileges on *.* from 'php_user'@'localhost';
 revoke all privileges on *.* from 'php_user'@'%';
show grants for  'php_user'@'localhost' ;
show grants for 'php_user'@'%';