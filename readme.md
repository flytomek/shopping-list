# Shopping list with VUE & Laravel

Basic Laravel 5.6 + VUE 2.5 with axios CRUD application. 

It uses Laravel for API and Vue for front-end.

## Installation

- Clone repository
```
git clone https://github.com/simple-webdev/shopping-list.git
```
- Copy .env.example file to .env and edit .env to configure your database
```
cd shopping-list
cp .env.example .env
```
- Install libraries and dependencies
```
composer install --no-scripts
```
- Generate application key, migrate and seed database
```
php artisan key:generate
php artisan migrate
php artisan db:seed
```
- Install npm packages & watch for changes
```
npm install
npm run watch
```
- Serve application using Valet, Homestead or just `php artisan serve`