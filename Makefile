up: 
	docker-compose up -d --build

stop:
	docker-compose stop

run: 
	docker-compose exec php php /app/index.php