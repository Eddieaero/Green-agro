# Green-Agro
### The Solution that will solve the SDG 13 in a more smart way while leveraging nature and available resources to reducing the Carbon (greenhouse) emission gas by 30%


## Features

- Soil & Crop monitoring suggestions based on crop and soil properties.
- Fertilizer recommendations based on soil test results.
- Slideshow with tips for managing soil health.
- User authentication and authorization.

## Technologies Used

- PHP
- MySQL
- HTML/CSS
- JavaScript/jQuery

## Installation

To install this project, make sure you have PHP 7 or above and the MySQLi extension installed and enabled. 

1. Clone the repository to your local machine.
2. Create a new database by executing the schema files located in the `site/schema` directory.
3. Update the database configuration file located in the `site` directory with your database credentials .
```php
    $servername = "localhost";
    $username = "< YOUR_DB_USER_NAME >";
    $password = "< YOUR_DB_PASSWORD >";
    $dbname = "greenagro";
```
4. Open your server on the `site` directory.
``` 
if you want to run the project in development environment 
```
```bash
cd site
```
```bash
# open development server on "http://localhost:8000"
php -S localhost:8000
```


## License

This project is licensed under the MIT License - see the `LICENSE` file for details.
