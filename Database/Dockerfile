#Version
FROM mysql:latest

#Beberapa variable dilakukan enviroment
ENV MYSQL_ALLOW_EMPTY_PASSWORD=1
ENV MYSQL_DATABASE=redlock

#Copy database ke docker
COPY redlockdb.sql /docker-entrypoint-initdb.d/redlockdb.sql