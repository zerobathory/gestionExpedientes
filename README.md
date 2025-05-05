<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>



## Instrucciones para descarga e instalación del respositorio


- Abrir la terminal de comandos de su preferencia ...
- Descargar el repositorio completo con ```git clone https://github.com/zerobathory/gestionExpedientes.git```
- Dirigirse a la carpeta descargada con ```cd gestionExpedientes```
- Instalar las dependencias de PHP con ```composer install```
- Instalar las dependencias de node con ```npm install```.
- Compilar los assets de node/bootstrap con ```npm run build```.
- copiar el archivo .env.example y renombrarlo como .env se sugiere usar el comando ```cp .env.example .env```
- Generar la clave de la aplicación de laravel con ```php artisan key:generate```
- Editar el archivo .env en la parte de DB_CONNECTION y configurar los datos de la BD de PostgreSQL(servidor, nombre de base de datos, usuario y contraseña)
- Inciar servidor de php(Apache) y de PostgreSQL de su preferencia
- Para generar las migraciones hay dos opciones, en caso que quieran la información de relleno con faker, usar el comando ```php artisan migrate --seed```......En caso de solo querer generar las tablas vacías para llenar los datos desde 0, ejecutar el comando ```php artisan migrate``` y posteriormente ejecutar el comando ```php artisan db:seed --class RoleSeeder``` con la finalidad de solo ejecutar el seeder de los roles de usuario y también se cargue en la Bd el usuario administrador y básico

Usuario con rol de administrador:
<p>Correo: <strong>administrador@test.com</strong></p>
<p>Contraseña: <strong>password</strong></p>

Usuario tendrá el rol básico:

<p>Correo: <strong>usuario@test.com</strong></p>
<p>Contraseña: <strong>password</strong></p>

Sin embargo será posible dar clic en el enlace de registrar de la landingpage para dar de alta cualquier usuario y éste se dará de alta por default con el rol básico

## Documentación

Desde que se descarga el repositorio, ya se encuentra la documentación disponible en una versión gráfica compilada, solo siga la ruta "docs/web/index.html"

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
