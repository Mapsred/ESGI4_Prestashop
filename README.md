# Prestashop

### Installation

Copy the ``app/config/database.php.dist`` to ``app/config/database.php``

Import MySQL dump :
````bash
docker exec -it prestashop-mariadb bash
mysql -u root -proot prestashop < bin/prestashop
````

Create the following file to configure your database : 
```php
// app/config/database.php
<?php

return [
    'database_host' => 'mariadb',
    'database_port' => '',
    'database_name' => 'prestashop',
    'database_user' => 'prestashop',
    'database_password' => 'prestashop',
];
```

To use on ``localhost`` or any other host, replace the 
docker-compose webserver port by ``80:80`` and run the following 
SQL Query : 
````sql
UPDATE `ps_shop_url` SET `domain` = 'localhost', `domain_ssl` = 'localhost' WHERE `id_shop_url` = 1;
````

### Commands

~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~$ docker-compose up -d
$ docker-compose exec nodejs npm --prefix themes/customized/_dev install
$ docker-compose exec php-fpm composer install
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

### Admin 
``/dashboard``

Email: admin@prestashop.com
Password: password
