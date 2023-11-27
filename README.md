
# Traker in Laravel

This Project is made using laravel with filamentphp 





## Screenshots
Login 

![Login Screen](https://github.com/rahulemathi/traker/blob/main/images/image%201.png?raw=true)

Dashboard
![Dashboard](https://github.com/rahulemathi/traker/blob/main/images/image%202.png?raw=true)

Brand
![Brand](https://github.com/rahulemathi/traker/blob/main/images/image%203.png?raw=true)

Model
![Models](https://github.com/rahulemathi/traker/blob/main/images/image%204.png?raw=true)

Detail
![Details](https://github.com/rahulemathi/traker/blob/main/images/image%205.png?raw=true)

Mileage
![Mileage](https://github.com/rahulemathi/traker/blob/main/images/image%206.png?raw=true)

Brand Creating 
![Brand Create](https://github.com/rahulemathi/traker/blob/main/images/image%207.png?raw=true)

Model Creating
![Model Create](https://github.com/rahulemathi/traker/blob/main/images/image%208.png?raw=true)

Detail Creating
![Detail Create](https://github.com/rahulemathi/traker/blob/main/images/image%209.png?raw=true)

Calculate Mileage
![Mileage](https://github.com/rahulemathi/traker/blob/main/images/image%2010.png?raw=true)
## Run Locally

Clone the project

```bash
    git clone https://github.com/rahulemathi/traker.git
```

Go to the project directory

```bash
    cd traker
```

Install composer update

```bash
    composer install
```

rename the .env.example file to .env file

```bash
    mv .env.example .env
```

generate key

```bash
    php artisan key:generate
```

make migration

```bash
    php artisan migrate
```

Start the serve

```bash
    php artisan serve
```
Link the Storage

```bash
php artisan storage:link
```

create a user
```bash
php artisan make:filament-user
```

make sure that your APP_URL = http://127.0.0.1:8000 to set the images working
## Authors

- [@rahulemathi](https://github.com/rahulemathi)

# Working on the Traker V2