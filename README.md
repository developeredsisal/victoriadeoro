Plataforma de Victoria de Oro

Corre el comando 'composer update' para actualizar las dependencias y paquetes
Configura el archivo '.env' con el nombre de la base de datos, usuario y contraseña
Corre el comando 'php artisan key:generate' para crear la llave
Corre el comando 'php artisan migrate --seed' para migrar las tablas a la base de datos y el usuario administrador
Solo contiene dos roles de usuario: 'administrador' y 'usuario', el administrador se crea con la migración y el usuario se crea cuando se registra un usuario luego el siguiente busca el rol y si existe ya no lo crea solo lo asigna

Este proyecto se hizo con Laravel 9 y Boostrap Febrero del 2023

