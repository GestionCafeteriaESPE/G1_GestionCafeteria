<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
# cafeteria

## --------------------------------------------------------------------------

## Configuración del Entorno

1. Clonar el repositorio:
   ```bash
   git clone https://github.com/GestionCafeteriaESPE/cafeteria.git
   cd cefeteria.git

2. Configurar el Archivo .env
   Copia el archivo de ejemplo ".env.example" y crea un ".env". Configúralo con las credenciales de tu entorno local:

   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306 -- De acuerdo a tu puerto de mysql en xampp
   DB_DATABASE=G1_GestionCafeteria
   DB_USERNAME=root
   DB_PASSWORD=

   Dentro de este archivo, se necesita ejecutar el siguiente comando para generar una APP_KEY (local):
   php artisan key:generate

3. Crear la Base de Datos en phpMyAdmin
   Abre phpMyAdmin en navegador
   Haz clic en "Nueva" en el panel de la izquierda.
   Introduce G1_GestionCafeteria como el nombre de la NUEVA base de datos.
   Selecciona el cotejamiento utf8mb4_unicode_ci.
   Haz clic en "Crear".

4. Instalar Dependencias
   composer install
   npm install
   npm run build

5. Ejecutar Migraciones y Seeders
   Para crear las tablas y poblar la base de datos con datos iniciales, ejecuta el siguiente comando:
      php artisan migrate:fresh --seed
   Esto eliminará todas las tablas, las recreará y luego ejecutará los seeders para insertar los datos iniciales.
   Además, guardará los datos dentro de "DatabaseSeeder.php" en la bdd local G1_GestionCafeteria

6. Iniciar el Servidor de Desarrollo
   Una vez configurado todo, se inicia el servidor de desarrollo de Laravel con:
      php artisan serve

7. AÑADIR EN .gitignore
   Dentro de la carpeta "database", ingresar a .gitignore y asegurarse de que incluya:
      *.sqlite*
      .env
