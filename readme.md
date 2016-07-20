# PGO-PHP - A PHP based Pokemon Go API Client (WIP)

PGO-PHP is a [Laravel](http://www.laravel.com) based PHP client built ontop of the Protocol Buffer used for Pokemon Go. The aim of PGO-PHP is to build a feature-rich library for PHP developers to make great apps based on Pokemon Go, as well as a fully featured RESTful HTTP API to power applications produced in other languages.

## Installation

A basic understanding of Laravel, or similar composer based PHP frameworks is beneficial and expected at this stage. Once we have features built out, I plan to decouple PGO-PHP from Laravel to be used in your preferred framework.

Install via Git

``` bash
$ git clone git@github.com:ashleyevans/pgo-php.git
$ cd pgo-php
```

Install Composer Dependencies
``` bash
$ composer install
```

Copy example .env file
``` bash
$ cp .env.example .env
```

Enter your Auth and Location details to your .env file. You can use either a PTC or Google account to login to the app. Please note we are not sure of Niantic's view on API access yet and as such we strongly recommend you use a throwaway account to interact with this (and other) apps.

``` bash
AUTH_SERVICE=changeme
AUTH_USERNAME=changeme
AUTH_PASSWORD=changeme
LOCATION="Buckingham Palace, London"
```

Once you're installed, it's best to run the pokemongo:test artisan command and look through the subsequent code
``` bash
$ php artisan pokemongo:test
```


## Current Progress

PGO-PHP is very much a new project and as such is light in features. Currently working on PGO-PHP:

 * Protocol Buffer Implementation
 * Google Authentication
 * PTC Authentication
 * Token Caching (to speed up subsequent requests when auth servers are busy)
 * Profile Display
 
Please note the Pokemon Go servers are currently under severe load and often struggle during busy periods. Until proper Error Handling is added, you will come across some PHP errors. Please bare with me, or even better help add better Error Reporting where appropriate.

## To-Do

The priorities I will be working on include:

 * Better Error Handling / Reporting
 * Updated .proto file with new messages
 * Begin Sample RESTful HTTP API
 * Match features of Python implementations

## Pull Requests / Contributions

I encourage and look forward to your submissions to help push this project further. If you have any ideas, suggestions or comments please do let me know or feel free to submit a pull request with new features / improvements.

Please note: The purpose of PGO-PHP is to enhance the Pokemon Go experience, and as such we won't accept any PRs or include code which is designed to negatively effect the playing experience of Pokemon Go for others.


## Thanks

Thanks to the following people who have made this project with their hard work and dedication

 * [Tejado](https://github.com/tejado/)
 * [Mila432](https://github.com/Mila432/)
 * [LeeGao](https://github.com/leegao/)

## License

PGO-PHP is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
