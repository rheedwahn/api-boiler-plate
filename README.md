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

## Installation

Setting up this boiler plate is easy especially for those familiar with the laravel ecosystem. The following steps are required to get this up and running

- Clone the project
- Run `composer install` to install dependency
- Copy the `.env.example` to `.env` file
- Set up the database credentials to suit your configuration
- Run `php artisan migrate` to migrate the tables into your database
- Run `php artisan passport:install` to get your personal access client and grant created
- Run `php artisan db:seed` to seed an initial user to your users table
- Download the postman collection from the link above
- Import the downloaded collection
- Serve the application on any port of your choice

## Todo
- Implement Unit and feature tests on all the functionalities

## Contributing

For anyone willing to contribute to this boiler plate, please dont hesitate to open a PR with your contributions

## Security Vulnerabilities

If you discover a security vulnerability within this boiler plate, please open a PR with your fixes.

## License

Rapido Api boiler plate is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
