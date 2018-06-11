DOCKER-COMPOSE = docker-compose exec -T nodejs

NPM = $(DOCKER-COMPOSE) npm --prefix themes/customized/_dev

COMPOSER = $(DOCKER-COMPOSE) composer

customized-watch:
	 $(NPM) run watch

customized-build:
	 $(NPM) run build

customized-install:
	 $(NPM) install

composer-install:
	$(COMPOSER) install

dump-import:
	mysql -u prestashop -pprestashop prestashop < bin/prestashop.sql --host=127.0.0.1 --port=8155
