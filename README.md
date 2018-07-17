# Prestashop

### Installation


#### make

- Go to [ezwinports](https://sourceforge.net/projects/ezwinports/files/).
- Download `make-4.1-2-without-guile-w32-bin.zip` (get the version without guile).
- Extract zip.
- Copy the contents to your `Git\mingw64\` merging the folders, but do NOT overwrite/replace any existing files. 

make is a GNU command so the only way you can get it on Windows is installing a Windows version like the one provided by [GNUWin32](https://sourceforge.net/projects/gnuwin32/files/make/3.81/make-3.81.exe/download?use_mirror=datapacket&download=).


~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
$ docker-compose up -d
$ make customized-install
$ make composer-install
$ make esgi-install
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~


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
