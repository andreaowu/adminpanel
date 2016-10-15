#User Management System

Created using Symfony 2 (with Twig and a MySQL database)

Functionalities:
- create user (who has a first and last name)
- delete user
- create group (which has a name)
- delete group
- add user to group
- delete user from group if group is empty

Deployment
==========
## Install
This command will install all the dependencies listed in composer.php
```
php composer.phar
```

## Server
This will run on localhost:8000. To start the server:
```
php bin/console server:run
```
To stop, ctrl+c.

## Database
This application uses a MySQL database, so start the database server by doing:
```
sudo /usr/local/bin/mysql.server start
```
If you want to stop the database server, you can do:
```
sudo /usr/local/bin/mysql.server stop
```

To create a database table, configure app/config/parameters.yml and run:
```
php bin/console doctrine:database:create
```
Then, update the created database with the tables in this project by doing:
```
php bin/console doctrine:schema:update --force
```
If at any time your database needs to be cleared, you can do:
```
mysql -u root -p
DROP DATABASE <database_name_from_parameters.yml>;
```
