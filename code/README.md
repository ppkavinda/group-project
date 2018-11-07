# athwela [![Build Status](https://travis-ci.com/ppkavinda/group-project.svg?branch=master)](https://travis-ci.com/ppkavinda/group-project)

**Athwela** is a web based learning center and an online market.

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites
These things should be installed on your system

- php
- composer
- node

### Installing

```
$ git clone https://github.com/ppkavinda/group-project.git
$ cd group-project
$ composer install
$ rename .env.example .env
$ php artisan key:generate
$ php artisan migrate
$ php artisan db:seed
$ npm install
$ php artisan serve
$ npm run watch
```

goto `localhost:8000`

<!-- ## Deployment -->

 <!-- These are the notes on how to deploy the project on a live system. -->

## Built With

* [Laravel](https://laravel.com/) - The web framework used
* [VueJs](https://vuejs.org/) - Front-end framework used
<!-- * [ROME](https://rometools.github.io/rome/) - Used to generate RSS Feeds -->
