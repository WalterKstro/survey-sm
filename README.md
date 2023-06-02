<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Requisitos
- Tener instalado PHP globalmente (minimo la versión 8)
- Tener composer instalado globalmente ``https://getcomposer.org/doc/00-intro.md``
- Tener laravel instalado globalmente ``composer global require laravel/installer``
- Pegar en la raiz del proyecto el archvio ``.env``
- Crear una base de datos con el nombre: ``smsurvey`` e importar el backup de la base de datos
    - En caso de que el servidor de base de datos, tenga un usuario diferente a root y una contraseña establecida, o un puerto diferente a 3306 debera de agregarse en el archvio ``.env``
    - DB_PORT=' '
    - DB_USERNAME=' '
- Ejecutar el siguiente comando desde el root del proyecto ``composer install``
- Ejecutar el siguiente comando, desde el root del proyecto
    - ``npm i``
- Ejecutar los siguientes comandos desde el root del proyecto
    - ``php artisan serve``
    - ``npm run dev``
