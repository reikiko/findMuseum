<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
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

## Clone to your own local Laravel
### Clone Repository
```sh
$ git clone https://github.com/reikiko/findMuseum.git
```
after that go to your directory
```sh
$ cd findMuseum
```
### Install Composer Dependencies

When we run composer, it checks the `composer.json` file which is submitted to the github repo and lists all of the composer (PHP) packages that your repo requires. Because these packages are constantly changing, the source code is generally not submitted to github, but instead we let composer handle these updates. So to install all this source code we run composer with the following command.
```sh
$ composer install
```
### Install NPM Dependencies
  
Just like how we must install composer packages to move forward, we must also install necessary NPM packages to move forward. This will install Vue.js, Bootstrap.css, Lodash, and Laravel Mix.
```sh
$ npm install
```

### Create a copy of your .env file
  
`.env` files are not generally committed to source control for security reasons. But there is a `.env.example` which is a template of the `.env` file that the project expects us to have. So we will make a copy of the `.env.example` file and create a `.env` file that we can start to fill out to do things like database configuration in the next few steps.
```sh
$ cp .env.example .env
```
This will create a copy of the `.env.example` file in your project and name the copy simply `.env`.
### Generate an app encryption key
```sh
$ php artisan key:generate
```
If you check the  `.env`  file again, you will see that it now has a long random string of characters in the  `APP_KEY`  field. We now have a valid app encryption key.

### In the .env file, add database information to allow Laravel to connect to the database
In the .env file fill in the `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, and `DB_PASSWORD`options to match the credentials of the database you just created. This will allow us to run migrations and seed the database in the next step.

### Migrate the database
Once your credentials are in the .env file, now you can migrate your database.
```sh
$ php artisan migrate:fresh --seed
```
--seed option is to automatically insert data to database that has been set inside the `DatabaseSeeder.php` file
## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
