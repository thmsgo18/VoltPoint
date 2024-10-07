ssh:
	docker exec  -it php-nginx /bin/bash
up:
	DOCKER_UID=$(UID) docker compose up -d
stop:
	DOCKER_UID=$(UID) docker compose stop
down:
	docker compose down