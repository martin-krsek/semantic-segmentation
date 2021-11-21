FROM php:8.0-apache
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN apt-get update && apt-get upgrade -y


ENV MYSQL_DATABASE=semantic_segmentation \
    MYSQL_ROOT_PASSWORD=password

ADD semantic_segmentation.sql /docker-entrypoint-initdb.d

EXPOSE 3306