up: docker-up
down: docker-down
restart: down up
init: docker-down-clear docker-pull docker-build docker-up app-init

docker-up:
	docker-compose up -d

docker-down:
	docker-compose down --remove-orphans

docker-down-clear:
	docker-compose down -v --remove-orphans

docker-pull:
	docker-compose pull

docker-build:
	docker-compose build

app-init: app-composer-install

app-composer-install:
	docker-compose run --rm php-cli composer install