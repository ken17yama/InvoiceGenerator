up:
	docker-compose up -d
down:
	docker-compose down
restart:
	docker-compose down && docker-compose up -d
web:
	docker-compose exec web ash
app:
	docker-compose exec app bash
delete:
	docker-compose down --volumes --rmi all
