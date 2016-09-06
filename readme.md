# TO-DO App para CristalMedia

## Requerimientos

- PHP >= 5.6.4

## Instalación

1. Instalar [composer](https://getcomposer.org/download/) y [bower](https://bower.io/)
    - `php composer.phar install`
    - `bower install`
2. Renombrar .env.example a .env y configurar la base de datos
    - `DB_DATABASE`
    - `DB_USERNAME`
    - `DB_PASSWORD`
3. Generar la base de datos:
    - `php artisan migrate:install`
    - `php artisan migrate`
    - `php artisan db:seed`
4. Generar una clave para la aplicación
    - `php artisan key:generate`
5. El directorio storage debe tener permisos de escritura
