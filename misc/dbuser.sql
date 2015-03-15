create database `emlauncher`;
CREATE USER 'emlauncher'@'%.%.%.%' IDENTIFIED BY 'password';
grant all on emlauncher.* to 'emlauncher'@'%.%.%.%';
