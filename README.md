## About Rapido Api Boiler Plate

This is a complete api boiler plate that allows you to easily set up and get your development work going without any hassle. The boiler plate is built on Laravel, one of PHP's most popular framework. It is developed by [rheedwahn](https://rheedwahn.github.io/). The boiler plate has the following implementation out of the box

- User Authentication using laravel passport for token management
- User Registration
- Roles Management
- Permissions Management
- Role Based Access Level Control (This can be modified to permission based for granular control)
- Profile Management

## Api Endpoints

To download the postman collection, please click on this [link](https://www.getpostman.com/collections/eb18b48ebbd906a5a900). The endpoints has the following folder structure

- Auth
  - Login Request
  - Register Request
  - Verify Email Request
  - Temporary Login Request
  - Forgot Password Request
  - Reset Password Request
- User
  - Me Request
  - Update Request
  - Store Request
  - Update User by Admin Request
  - Delete Request
  - List Request
- Roles
  - List Request
  - Store Request
  - Update Request
  - Delete Request
  - Assing Permissions to Role Request
- Permissions
  - List Request
  - Store request
  - Update Request
  - Delete Request

## Setup of Dev Environment

The environment is setup using docker, so you can just get started immediately without jumping through hoops to setup environments.

The tools you need installed in your environment are the latest version of `docker` and `docker-compose`

Note, the instructions assume you are working from a unix/linux based system.

To get the docker environment to run locally, the following steps need to be taken.

1. rename the `env.example` file to `.env`

2. while in the root directory, run the following command, which will start all the services and set them to the background:
    * `docker-compose up --build -d`
3. go into the running app container, `api_boiler_plate` and run `composer install`. You only need to run these whenever composer.json changes, or you delete the vendor directory. As a matter of principle, I try to run this every time I do a pull and start the app. To go into the container and use composer, do the following:
    * `docker-compose exec api_boiler_plate bash`
    * `composer install`
Alternatively, you do not have to go into any of the containers to do this, you can run the command directly from docker-compose, the following can work for you.
    * `docker-compose exec api_boiler_plate composer install`

4. the webserver and mysql database can be accessed at the following endpoints and ports:
    * webserver: __localhost:8090__
    * database:
        * location: __localhost:3306__
        * username: __root__
        * password: __api_user__
    note, that these are default values and are actually set as environment variables that are picked up by both the app and the database. See `docker-compose.yaml` for more information about all of these.
5. Enjoy testing.

As you make changes, the changes are reflected, while testing.

If you want to go into a running container, whether te webserver or the database, the following commands using docker-compose will help.

```bash
docker-compose exec api_boiler_plate bash # this is for the api app
docker-compose exec database_engine bash # this is for the database
docker-compose exec redis_server bash # this is for the redis server
```

There are many reasons you might want to go into the containers, i.e run some commands, check logs etc

### Migration

For first time installation, after successful start of the containers, you ll need to go into the app container with the command `docker-compose exec api_boiler_plate bash` and run the following :
* `php artisan migrate`
* `php artisan passport:install --uuids`  this will prompt for the re run of the migration
* `php artisan db:seed`


## Todo
- Implement Unit and feature tests on all the functionalities

## Contributing

For anyone willing to contribute to this boiler plate, please dont hesitate to open a PR with your contributions

## Security Vulnerabilities

If you discover a security vulnerability within this boiler plate, please open a PR with your fixes.

## License

Rapido Api boiler plate is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
