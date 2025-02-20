# Code Challenge - Symfony 7 Rest API

This challenge requires you to create an API that will import data from a third party API and be able to display it.

Building Symfony RESTful APIs using Symfony 7, Command, Service, validations, Serializer, DTO etc.

## Features

- Import some Data from a 3rd party data provider and save to the database. (cool list of public APIs: https://github.com/toddmotto/public-apis)
- Display a list of short data from the database.
- Select and display details of a single customer from the database.

## Requirements

- PHP: ">=8.2"

## Build

Clone github repository:

In your `.env` file, you need to configure `DATABASE_URL`.

Install dependencies with composer:

```
composer install
```

Create the database:

```
php bin/console doctrine:database:create
```

Run migrations:

```
php bin/console doctrine:migrations:migrate
```

Run Data Import Command

```
php bin/console app:import-api-data
```

Run the application

```
symfony server:start
```

Have a check on a browser.

```
http://localhost:8000
```

## REST APIs

Create 2 RESTful API endpoints with the following route definition:

- GET /data

  Retrieve the list of all data from the database with some parameters like limit, query.
  The response should contain a short view of Entity:

        name
        creation_tz
        ...

- GET /data/{objectId}

  Retrieve more details of a single Entity The response should contain a full detail of Entity

## Test

Create test database for unit test and application test.

```
php bin/console --env=test doctrine:database:create
```

Run Test cases

```
php bin/phpunit
```
