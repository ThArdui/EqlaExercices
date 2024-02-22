CREATE USER 'totoweb'@'localhost' IDENTIFIED BY 'Datatoto';
CREATE USER 'totowebremote'@'%' IDENTIFIED BY 'Datatotorem';
SELECT user, host FROM mysql.user;