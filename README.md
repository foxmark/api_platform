## Useful commands

```sh
docker-compose exec php bin/console doctrine:migrations:migrate
```
```sh
docker-compose exec php bin/console doctrine:fixtures:load
```
```sh
docker-compose exec php vendor/bin/phpunit tests/Unit
```
```sh
docker-compose exec php bin/console make:factory
```
```sh
docker-compose exec php bin/console config:dump api_platform
```
```sh
docker-compose exec php bin/console debug:config api_platform
```