# Backoffice - Laravel

A simple backoffice admin controls made with Laravel.

The functionality consist of authentication, organization and people management features.<br><br>
The web app consist of 4 models: Organization, People (Person/PIC), Authorization, User.

## How to use

- Clone Repository
- Run <b>composer install</b> or <b>composer update</b>
- Copy .env.example to .env
- Run <b>php artisan key:generate</b>
- Setup database name, username, and password
- Run <b>php artisan migrate</b>
- Run <b>php artisan db:seed</b>
- Open https://127.0.0.1:8000 (the port differs from machine to another)


Use this credentials to login: <br><br>
Email: kervinch@outlook.com <br>
Email: alpha@backoffice.com <br>
Email: beta@backoffice.com <br>
Email: charlie@backoffice.com <br>
Email: gamma@backoffice.com <br>

Password: password <br>
* all password is the same: password

You will be redirected to the dashboard page. Here you can select which feature you want to access, organization or people. <br><br>
Only Organizations created by the user can be accessed and modified. This applies to the Person inside of the organization as well.

Core routes: <br>
http://127.0.0.1:8000/login <br>
http://127.0.0.1:8000/dashboard <br>
http://127.0.0.1:8000/organization <br>
http://127.0.0.1:8000/organization/create <br>
http://127.0.0.1:8000/people <br>
http://127.0.0.1:8000/people/create <br>
http://127.0.0.1:8000/logout <br>

## Models
#### Organization Model:

        Schema::create('organizations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone', 15);
            $table->string('email')->unique();
            $table->string('website');
            $table->string('logo')->nullable();
            $table->string('created_by');
            $table->string('updated_by');
            $table->timestamps();
        });

#### People Model:

        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->integer('organization_id');
            $table->string('email')->unique();
            $table->string('phone', 15);
            $table->string('avatar')->nullable();
            $table->string('created_by');
            $table->string('updated_by');
            $table->timestamps();
        });

#### Authorization Model:

        Schema::create('authorizations', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('organization_id');
            $table->timestamps();
        });

#### User Model:

        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

<hr>
The API and Routes are as follows: <br>

## Auth
### Login
[GET] /login <br>
#### Parameters: none <br>
#### Response: <br>
<p align="center"><img src="storage/app/public/misc/login.png" width="400"></p>

### Logout
[GET] /logout <br>
#### Parameters: none <br>
#### Response: <br>
-- user logout --

<br>

## Dashboard
### Home Page
[GET] / or /dashboard<br>
#### Parameters: none <br>
#### Response: <br>
<p align="center"><img src="storage/app/public/misc/dashboard.png" width="400"></p>

<br>

## Organization
### List
[GET] /organization <br>
#### Parameters: none <br>
#### Response: <br>
<p align="center"><img src="storage/app/public/misc/organization.png" width="400"></p>

### Create View
[GET] /organization/create <br>
#### Parameters: none <br>
#### Response: <br>
<p align="center"><img src="storage/app/public/misc/organization_create.png" width="400"></p>

### Create
[POST] /organization/create <br>
#### Parameters:  <br>
name    string <br>
email   string <br>
phone   string <br>
website string <br>
logo    string
#### Response: <br>
        {
            "status": "success",
            "message": "success",
            "code": 200,
            "data": {
                created_at: "2021-12-21T14:54:06.000000Z",
                created_by: "Kervin",
                email: "response@documentation.com",
                id: 12,
                logo: "logo/OU5UFOpxyFG5iiuoAPegDceKPUnN4Wu69q86teb2.png",
                name: "Response",
                phone: "000101011",
                updated_at: "2021-12-21T14:54:06.000000Z",
                updated_by: "Kervin",
                website: "http://www.backoffice.com"
            }
        }

### Update
[POST] /organization/edit <br>
#### Parameters:  <br>
id      int    <br>
name    string <br>
email   string <br>
phone   string <br>
website string <br>
logo    string
#### Response: <br>
<i>(similar to Create)</i>

### Delete
[POST] /organization/delete/{id} <br>
#### Parameters:  <br>
id int
#### Response: <br>
        {
            "status": "success",
            "message": "success",
            "code": 200,
            "data": "SUCCESS TO DELETE DATA"
        }

<br>

## People
### List
[GET] /people <br>
#### Parameters: none <br>
#### Response: <br>
<p align="center"><img src="storage/app/public/misc/people.png" width="400"></p>

### Create View
[GET] /people/create <br>
#### Parameters: none <br>
#### Response: <br>
<p align="center"><img src="storage/app/public/misc/people_create.png" width="400"></p>

### Create
[POST] /people/create <br>
#### Parameters:  <br>
email   string <br>
phone   string <br>
avatar string <br>
organization int
#### Response: <br>
        {
            "status": "success",
            "message": "success",
            "code": 200,
            "data": {
                avatar: "avatar/LAmlEusIkWJILIuJPpd0Uxe8xMx9X1trZ1t0f7CG.jpg",
                created_at: "2021-12-21T15:04:51.000000Z",
                created_by: "Kervin",
                email: "response@documentation.com",
                id: 13,
                organization_id: "1",
                phone: "1212121212",
                updated_at: "2021-12-21T15:04:51.000000Z",
                updated_by: "Kervin"
            }
        }

### Update
[POST] /people/edit <br>
#### Parameters:  <br>
id      int    <br>
email   string <br>
phone   string <br>
avatar string <br>
organization int
#### Response: <br>
<i>(similar to Create)</i>

### Delete
[POST] /people/delete/{id} <br>
#### Parameters:  <br>
id int
#### Response: <br>
        {
            "status": "success",
            "message": "success",
            "code": 200,
            "data": "SUCCESS TO DELETE DATA"
        }

<br>

<br><br>
<p align="center">Made With</p>
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

