Blog
========

## Synopsys

My personnal blog to train myself with symfony.

## Getting Started

### Prerequisites

Before install the project you need to have :


* [PHP 7](http://php.net/)
* [Composer](https://getcomposer.org/download/)
* [Mysql](https://www.mysql.com/)


### Installing

In first clone the project.
```
git clone https://github.com/EmilienLeroy/blog.git
```


### Start the project

After do the installation you can run the project with this command :

```
php bin/console server:run
```

Now you can connect to the project with this address :

```
http://localhost:8000
```

## Documentation

### Doctrine

configure the database : 
```
# app/config/parameter.yml
parameters:
    database_host: "the database ip"
    database_port: "your port"
    database_name: "the database name"
    database_user: "the database user"
    database_password: "password"
```

Create the database :
```
 php bin/console doctrine:database:create
```

Validate your schema : 
```
 php bin/console doctrine:schema:validate
```

Create table into the database :
```
 php bin/console doctrine:schema:update --force
```

## License

[The MIT License (MIT)](https://opensource.org/licenses/MIT)