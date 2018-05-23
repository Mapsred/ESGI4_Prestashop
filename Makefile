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
