# blog  #
## Git, obtener maestro y descartar los cambios locales ##
```
$ git fetch --all
$ git reset --hard origin/master
```

- - - -

## Almacenar credenciales de git ##
```
$ git config credential.helper store
$ php ../composer.phar dump-autoload //fix seeders
```

- - - -

## Eliminar paquete de laravel ##
* Buscar el archivo composer.json y eliminar la linea donde se encuentra el paquete a eliminar.
* Abrir el archivo config/app.php y eliminar las llamadas al paquete en los Providers y Aliases.
* Ejecutar los comandos php artisan cache:clear seguido php artisan config:cache para que le limpie la cache de Laravel y no deje rastros de llamadas al paquete.
* Finalmente ejecutar composer update.
</p>