DOCKER-COMPOSE = docker-compose exec

NODEJS = $(DOCKER-COMPOSE) nodejs
NPM = $(NODEJS) npm --prefix themes
CUSTOMIZED_THEME = $(NPM)/customized/_dev
ESGI_THEME = $(NPM)/esgi/_dev

PHP = $(DOCKER-COMPOSE) php-fpm
COMPOSER = $(PHP) composer

customized-watch:
	 $(CUSTOMIZED_THEME) run watch

customized-build:
	 $(CUSTOMIZED_THEME) run build

customized-install:
	 $(CUSTOMIZED_THEME) install

esgi-watch:
	 $(ESGI_THEME) run watch

esgi-build:
	 $(ESGI_THEME) run build

esgi-install:
	 $(ESGI_THEME) install

composer-install:
	$(COMPOSER) install

mysql-dump-import:
	mysql -u prestashop -pprestashop --host=127.0.0.1 --port=8155 prestashop < bin/prestashop.sql
mysql-dump-export:
	mysqldump -u prestashop -pprestashop prestashop --host=127.0.0.1 --port=8155 > bin/prestashop.sql
