# Read-Easy-Broker-Api
 
<p align="center">
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Stack 

- Php version 7.4.13.
- MySql version 8.0.22.
- Laravel version 8.69.*

## how to install?

- Clone this repository.
- Run  <code>composer install</code>
- Create a local database
- Create a <code>.env</code> File, based on <code>.env.example</code> file
- Add EASYBROKER_API_KEY to .env file with your easy broken api token
- Config <code>.env</code> File
- Run <code>php artisan migrate</code> command
- Run <code>php artisan test</code> to test the api
- Open the project to see your properties titles


## Files to see

- config/easybroker.php
- app/Services/EasyBrokerService.php
- tests/Unit/EasyBrokerServiceTest.php
- app/Http/Controllers/PropertyController.php
- resources/views/welcome.blade.php
