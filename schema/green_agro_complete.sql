-- Green Agro System DB

-- create database
CREATE DATABASE `greenagro`;

-- activate database
USE `greenagro`;

-- create tables
CREATE TABLE user (
  id INT PRIMARY KEY AUTO_INCREMENT,
  username VARCHAR(255),
  password TEXT
);
-- consider  to add more field ie (mobile number etc)

CREATE TABLE crop (
  id INT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(255),
  description TEXT,
  days_to_harvest INT
);

CREATE TABLE field (
  id INT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(255),
  description TEXT,
  latitude FLOAT,
  longitude FLOAT,
  owner INT
);
-- Table field should have relationship to user on field owner


CREATE TABLE crop_field (
  id INT PRIMARY KEY AUTO_INCREMENT,
  crop_id INT,
  field_id INT,
  planting_date DATE,
  harvest_date DATE
);
-- Crop field this table stores data for crops planted in field(x)
-- crop_id should reference crop.id as a foreign key
-- fiel_id should reference field.id as a foreign key


CREATE TABLE crop_data (
  id INT PRIMARY KEY AUTO_INCREMENT,
  crop_field_id INT,
  date DATE,
  temperature FLOAT,
  rainfall FLOAT,
  soil_moisture FLOAT,
  pest_infestation_level FLOAT,
  disease_incidence_level FLOAT,
  yield FLOAT
);
-- crop data table holds infomation for farm conditions fro every registered crop
-- the field "crop_field_id" is supposed to be just "crop_id"

-- INITIAL DATA TO POPULATE THE DATABASE
INSERT INTO crop (id, name, description) VALUES
(1, 'Maize', 'A cereal crop commonly used for food and animal feed.'),
(2, 'Rice', 'A staple food crop consumed by millions of people worldwide.'),
(3, 'Cassava', 'A root crop that is a source of carbohydrates and an important food security crop.'),
(4, 'Beans', 'A legume crop that is high in protein and an important source of nutrition.'),
(5, 'Peanuts', 'A legume crop that is a source of protein and oil.'),
(6, 'Sweet potatoes', 'A root crop that is high in vitamins and antioxidants.'),
(7, 'Sorghum', 'A cereal crop that is used for food, animal feed, and biofuel production.'),
(8, 'Cotton', 'A fiber crop that is used for textiles and other industrial purposes.'),
(9, 'Coffee', 'A cash crop that is a source of caffeine and widely consumed around the world.'),
(10, 'Tea', 'A beverage crop that is consumed by millions of people worldwide.');

INSERT INTO field (id, name, description, latitude, longitude) VALUES
(1, 'Farm A', 'A small farm located in the outskirts of Dar es Salaam', -6.7924, 39.2083),
(2, 'Farm B', 'A medium-sized farm located in the highlands of Tanzania', -6.3690, 34.8888),
(3, 'Farm C', 'A large-scale farm located in the northern region of Tanzania', -3.3822, 35.8089);

INSERT INTO crop_field (id, crop_id, field_id, planting_date, harvest_date) VALUES
(1, 1, 1, '2022-04-01', '2022-07-01'),
(2, 2, 2, '2022-05-01', '2022-10-01'),
(3, 3, 3, '2022-03-01', '2023-03-01'),
(4, 4, 1, '2022-06-01', '2022-08-01'),
(5, 5, 2, '2022-04-01', '2022-09-01'),
(6, 6, 3, '2022-05-01', '2022-10-01'),
(7, 7, 1, '2022-04-01', '2022-07-01'),
(8, 8, 2, '2022-05-01', '2022-10-01'),
(9, 9, 3, '2022-03-01', '2022-12-01'),
(10, 10, 1, '2022-03-01', '2022-12-01');


UPDATE crop
SET days_to_harvest = CASE name
    WHEN 'Maize' THEN 90
    WHEN 'Rice' THEN 120
    WHEN 'Beans' THEN 60
    WHEN 'Cassava' THEN 240
    WHEN 'Wheat' THEN 150
    WHEN 'Sorghum' THEN 90
    WHEN 'Sweet potatoes' THEN 120
    WHEN 'Bananas' THEN 360
    WHEN 'Peanuts' THEN 120
    WHEN 'Tomatoes' THEN 80
    ELSE 90
END;


INSERT INTO crop_data (crop_field_id, date, temperature, rainfall, soil_moisture, pest_infestation_level, disease_incidence_level, yield) 
VALUES (1, '2022-05-01', 28.5, 50.2, 60, 0.2, 0.1, 350);
INSERT INTO crop_data (crop_field_id, date, temperature, rainfall, soil_moisture, pest_infestation_level, disease_incidence_level, yield) 
VALUES (2, '2022-05-01', 27.8, 70.5, 75, 0.3, 0.2, 500);
INSERT INTO crop_data (crop_field_id, date, temperature, rainfall, soil_moisture, pest_infestation_level, disease_incidence_level, yield) 
VALUES (3, '2022-05-01', 26.3, 45.2, 65, 0.1, 0.05, 400);
INSERT INTO crop_data (crop_field_id, date, temperature, rainfall, soil_moisture, pest_infestation_level, disease_incidence_level, yield) 
VALUES (4, '2022-05-01', 28.2, 60.1, 70, 0.4, 0.15, 300);
INSERT INTO crop_data (crop_field_id, date, temperature, rainfall, soil_moisture, pest_infestation_level, disease_incidence_level, yield) 
VALUES (5, '2022-05-01', 29.1, 55.3, 80, 0.2, 0.1, 200);
INSERT INTO crop_data (crop_field_id, date, temperature, rainfall, soil_moisture, pest_infestation_level, disease_incidence_level, yield) 
VALUES (6, '2022-05-01', 25.6, 40.5, 85, 0.1, 0.05, 450);
INSERT INTO crop_data (crop_field_id, date, temperature, rainfall, soil_moisture, pest_infestation_level, disease_incidence_level, yield) 
VALUES (7, '2022-05-01', 27.4, 65.2, 70, 0.3, 0.2, 250);
INSERT INTO crop_data (crop_field_id, date, temperature, rainfall, soil_moisture, pest_infestation_level, disease_incidence_level, yield) 
VALUES (8, '2022-05-01', 30.2, 75.8, 65, 0.4, 0.15, 150);
INSERT INTO crop_data (crop_field_id, date, temperature, rainfall, soil_moisture, pest_infestation_level, disease_incidence_level, yield) 
VALUES (9, '2022-05-01', 26.8, 55.1, 80, 0.2, .34, 460);


