FROM php:7.0-cli

COPY src/ /usr/src/pk-id-factory

WORKDIR /usr/src/pk-id-factory

CMD [ "php", "./PkIdFactory.php" ]
