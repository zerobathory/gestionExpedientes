<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>



## Instrucciones para descarga e instalación del respositorio



- Descargar el repositorio completo con "git clone https://github.com/zerobathory/gestionExpedientes.git"
- Instalar las dependencias de PHP con "composer install"
- Instalar las dependencias de node con "npm install".
- Compilar los assets de node/bootstrap con "npm run build".
- copiar el archivo .env.example y renombrarlo como .env
- Generar la clave de la aplicación de laravel con "php artisan key:generate"
- Editar el archivo .env en la parte de DB_CONNECTION y configurar los datos de la BD de PostgreSQL(servidor, nombre de base de datos, usuario y contraseña)
- Generar las migraciones con "php artisan migrate --seed"

Las migraciones van a generar en la BD algunos datos con faker y a su vez 2 usuarios precargados, uno con el rol de administrador el cual tiene los siguientes datos:
<p>Correo: administrador@test.com</p>
<p>Contraseña: password</p>

Y el otro usuario tendrá el rol básico:

<p>Correo: usuario@test.com</p>
<p>Contraseña: password</p>

Sin embargo será posible dar clic en el enlace de registrar de la landingpage para dar de alta cualquier usuario y éste se dará de alta por default con el rol básico


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
