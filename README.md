Execute docker-compose up -d in the terminal and load:

http://localhost:8080/task1.php
http://localhost:8080/task2.php
http://localhost:8080/task3.php


The docker exec command allows you to run commands inside a Docker container. The following command line will give you a bash shell inside your mysql container:
docker exec -it mysql_container_name bash

The log is available through Docker's container log:
docker logs mysql_container_name