# CAR RENTAL 

This is web's application. It provide Car Rental's services. 
##### Function
* Reserve Cars 
* Manage Cars
* Manage Web
* ...

[Application demo Video](https://youtu.be/-Zd2UWnuaNE)

## Installation


Make sure that you installed PHP7.2.24 and Composer 1.6.3 and npm <br>

Clone project:
```bash
git clone https://github.com/17021084/Car_Rental_Online.git
```
then inport `carrental.sql` into database.

* Change .env.example .env => .env

* Open your .env file and change the database name (DB_DATABASE) to whatever you had , username (DB_USERNAME) and password (DB_PASSWORD) field correspond to your configuration.

* By default, the username is `root` and you can leave the `password` field empty. (This is for Xampp)

* By default, the username is root and password is also root. (This is for Lamp)

To download module 
```bash
composer install 
```


## Usage

* Start mysql server
* Run 

```bash
 php artisan serve
```

By default, The WebServer will deploy on `PORT: 8000`. <br>
Open browser and access : `localhost:8000` .

