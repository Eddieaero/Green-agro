# Green-Agro
### The Solution that will solve multiple Agriculture problems in  smart way while leveraging available open source data hubs to deliver this product 


## Features

- Soil & Crop monitoring suggestions based on crop and soil properties.
- Fertilizer recommendations based on soil test results.
- Slideshow with tips for managing soil health.
- User authentication and authorization.
- land prospecting
- in market crop price trends


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

## Important
All dynamic values that automatically change are there on purpose to show the system will react to changes is environment.

## Data sources
1. iSDA 
- used to collect soils data. from their open API product

2. World Food Program
- Data collected from HCX Datasets for crop prices from 2006 up to 2023

3. All Africa online magazine
- For up to date Tanzania local Agricultural News

## License

This project is licensed under the MIT License - see the `LICENSE` file for details.
