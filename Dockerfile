FROM php:8.0-cli

COPY src/ /usr/src/pk-id-factory

WORKDIR /usr/src/pk-id-factory

CMD [ "php", "./PkId/PkIdFactory.php" ]
