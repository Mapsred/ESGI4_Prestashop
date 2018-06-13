DOCKER-COMPOSE = docker-compose exec

NODEJS = $(DOCKER-COMPOSE) nodejs
NPM = $(NODEJS) npm --prefix themes/customized/_dev

PHP = $(DOCKER-COMPOSE) php-fpm
COMPOSER = $(PHP) composer

customized-watch:
	 $(NPM) run watch

customized-build:
	 $(NPM) run build

customized-install:
	 $(NPM) install

composer-install:
	$(COMPOSER) install

mysql-dump-import:
	mysql -u prestashop -pprestashop --host=127.0.0.1 --port=8155 prestashop < bin/prestashop.sql
mysql-dump-export:
	mysqldump -u prestashop -pprestashop prestashop --host=127.0.0.1 --port=8155 > bin/prestashop.sql
