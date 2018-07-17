# Prestashop

### Commands

~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
$ docker-compose up -d
$ make customized-install
$ make composer-install
$ make esgi-install
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~


### Installation


Create the following file to configure your database : 
```php
// app/config/database.php
<?php

return [
    'database_host' => 'mariadb',
    'database_port' => '',
    'database_name' => 'prestashop',
    'database_user' => 'root',
    'database_password' => 'root',
];
```

Import MySQL dump :
````bash
$ make mysql-dump-import
````

Export MySQL dump :
````bash
$ make mysql-dump-export
````

To use on ``localhost`` or any other host, replace the 
docker-compose webserver port by ``80:80`` and run the following 

### Admin 
``/dashboard``

Email: admin@prestashop.com
Password: password
