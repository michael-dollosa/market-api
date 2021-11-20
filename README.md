<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Market-API
Laravel backend for market-client.

## Setup
- Clone Project
- Setup database
- Run seeds for dummy data
`
php artisan db:seed
`
- Run server
`
php artisan serve
`

## Endpoints
| METHOD  | DESCRIPTION  | ENDPOINT |
| :------------ |:--------------- | :----- |
| GET | Get All Products | {url prefix}/api/products |
| POST | Create Product | {url prefix}/api/product |
| PUT | Update Product | {url prefix}/api/product/:id |
| GET | Get Specific Product | {url prefix}/api/products/:id |
| DELETE | Delete Product | {url prefix}/api/products/:id |
| GET | Get All Orders | {url prefix}/api/orders |
