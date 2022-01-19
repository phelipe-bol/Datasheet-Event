FROM php:7.4-cli
COPY . /usr/dockerTest
WORKDIR /usr/dockerTest
CMD [ "php", "./index.php" ]