SopinetChat / demo-SopinetChatSymfony
=====================================

Proyecto demo en Symfony2, utilizando el Bundle de SopinetChat

Esta demo contiene un proyecto funcional preparado para dar servicio de chat a un cliente Web Websocket y un cliente Android.
También tiene implementado un tipo de mensaje especial custom para mostrar dicha funcionalidad en el SopinetChatBundle.

# ¡Utilizar esta demo directamente!

Ahora puedes probar esta demo directamente en la instalación de pruebas que hemos hecho en la siguiente URL: [http://demo.sopinetchat.org/](http://demo.sopinetchat.org/)

# Instalación

```
git clone https://github.com/sopinetchat/demo-SopinetChatSymfony.git .
composer install
```

# Caché y base de datos

```
php app/console cache:clear
php app/console doctrine:schema:update --force
```

# Activar Websocket (útil para conectar un cliente web)

Siempre puedes desactivar esta opción en el config de sopinet_chat:
```
sopinet_chat:_
  enabledWeb: false
```

## Lanzar Websocket

Normal
```
php app/console gos:websocket:server
```

En Background:
```
nohup php app/console gos:websocket:server &
```

# Activar RabbitMqBundle (útil si quieres que SopinetChatBundle procese los mensajes en Background)

Siempre puedes desactivar esta opción en el config de sopinet_chat:
```
sopinet_chat:_
  background: false
```_

Debes instalar [RabbitMq](https://www.rabbitmq.com) en tu servidor y revisar los parámetros de configuración en el config de esta demo.

## Lanzar Consumidor

Normal:
```
php app/console rabbitmq:consumer send_message_package
```

En Background:
```
nohup php app/console rabbitmq:consumer send_message_package &
```



# Parámetros de configuración

Deberá configurar parámetros típicos de Symfony2, como base de datos

También deberá configurar 3 parámetros para SopinetChatBundle, los dos primeros para la conexión websocket y el último para la clave GoogleCloudMessages.
