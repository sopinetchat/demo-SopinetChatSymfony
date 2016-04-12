SopinetChat / demo-SopinetChatSymfony
=====================================

Proyecto demo en Symfony2, utilizando el Bundle de SopinetChat

Esta demo contiene un proyecto funcional preparado para dar servicio de chat a un cliente Web Websocket y un cliente Android.
También tiene implementado un tipo de mensaje especial custom para mostrar dicha funcionalidad en el SopinetChatBundle.

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

Normal
```
php app/console gos:websocket:server
```

En Background:
```
nohup php app/console gos:websocket:server &
```

# Parámetros de configuración

Deberá configurar parámetros típicos de Symfony2, como base de datos

También deberá configurar 3 parámetros para SopinetChatBundle, los dos primeros para la conexión websocket y el último para la clave GoogleCloudMessages.
