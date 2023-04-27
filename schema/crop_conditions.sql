CREATE TABLE crop_condition (
  id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  crop_id INT(11) NOT NULL,
  crop_stage VARCHAR(50) NOT NULL,
  max_ph_level FLOAT NOT NULL,
  min_ph_level FLOAT NOT NULL,
  max_nutrient_content INT(11) NOT NULL,
  min_nutrient_content INT(11) NOT NULL,
  max_organic_matter FLOAT NOT NULL,
  min_organic_matter FLOAT NOT NULL,
  max_soil_moisture INT(11) NOT NULL,
  min_soil_moisture INT(11) NOT NULL,
  max_soil_temp INT(11) NOT NULL,
  min_soil_temp INT(11) NOT NULL,
  max_precipitation FLOAT NOT NULL,
  min_precipitation FLOAT NOT NULL,
  max_temperature FLOAT NOT NULL,
  min_temperature FLOAT NOT NULL,
  PRIMARY KEY (id)
);

INSERT INTO crop_condition (crop_id, crop_stage, max_ph_level, min_ph_level, max_nutrient_content, min_nutrient_content, max_organic_matter, min_organic_matter, max_soil_moisture, min_soil_moisture, max_soil_temp, min_soil_temp, max_precipitation, min_precipitation, max_temperature, min_temperature) VALUES
(1, 'Seedling', 7.0, 6.0, 150, 120, 4.0, 2.0, 80, 60, 30, 20, 150, 50, 30, 20),
(1, 'Vegetative', 7.0, 6.0, 250, 200, 4.0, 2.0, 80, 60, 30, 20, 150, 50, 30, 20),
(1, 'Tasseling', 7.0, 6.0, 300, 250, 4.0, 2.0, 80, 60, 30, 20, 150, 50, 30, 20),
(1, 'Reproductive', 7.0, 6.0, 300, 250, 4.0, 2.0, 80, 60, 30, 20, 150, 50, 30, 20),
(1, 'Maturity', 7.0, 6.0, 250, 200, 4.0, 2.0, 80, 60, 30, 20, 150, 50, 30, 20),
(2, 'Seedling', 6.0, 5.5, 150, 120, 4.0, 2.0, 80, 60, 30, 20, 150, 50, 30, 20),
(2, 'Vegetative', 6.0, 5.5, 250, 200, 4.0, 2.0, 80, 60, 30, 20, 150, 50, 30, 20),
(2, 'Tillering', 6.0, 5.5, 300, 250, 4.0, 2.0, 80, 60, 30, 20, 150, 50, 30, 20);

INSERT INTO crop_condition (crop_id, crop_stage, max_ph_level, min_ph_level, max_nutrient_content, min_nutrient_content, max_organic_matter, min_organic_matter, max_soil_moisture, min_soil_moisture, max_soil_temp, min_soil_temp, max_precipitation, min_precipitation, max_temperature, min_temperature) VALUES
(2, 'Reproductive', 6.0, 5.5, 300, 250, 4.0, 2.0, 80, 60, 30, 20, 150, 50, 30, 20),
(2, 'Maturity', 6.0, 5.5, 250, 200, 4.0, 2.0, 80, 60, 30, 20, 150, 50, 30, 20),
(3, 'Germination', 6.0, 5.5, 100, 80, 2.0, 1.0, 70, 60, 30, 20, 100, 50, 30, 20),
(3, 'Vegetative', 6.0, 5.5, 150, 120, 3.0, 1.5, 70, 60, 30, 20, 100, 50, 30, 20),
(3, 'Root development', 6.0, 5.5, 150, 120, 3.0, 1.5, 70, 60, 30, 20, 100, 50, 30, 20),
(3, 'Stem elongation', 6.0, 5.5, 150, 120, 3.0, 1.5, 70, 60, 30, 20, 100, 50, 30, 20),
(3, 'Tuber initiation', 6.0, 5.5, 150, 120, 3.0, 1.5, 70, 60, 30, 20, 100, 50, 30, 20),
(3, 'Tuber bulking', 6.0, 5.5, 150, 120, 3.0, 1.5, 70, 60, 30, 20, 100, 50, 30, 20),
(3, 'Maturity', 6.0, 5.5, 150, 120, 3.0, 1.5, 70, 60, 30, 20, 100, 50, 30, 20);

INSERT INTO crop_condition (crop_id, crop_stage, max_ph_level, min_ph_level, max_nutrient_content, min_nutrient_content, max_organic_matter, min_organic_matter, max_soil_moisture, min_soil_moisture, max_soil_temp, min_soil_temp, max_precipitation, min_precipitation, max_temperature, min_temperature) VALUES
(4, 'Seedling', 6.5, 6.0, 150, 120, 4.0, 2.0, 80, 60, 30, 20, 100, 50, 30, 20),
(4, 'Vegetative', 6.5, 6.0, 200, 150, 4.0, 2.0, 80, 60, 30, 20, 100, 50, 30, 20),
(4, 'Flowering', 6.5, 6.0, 200, 150, 4.0, 2.0, 80, 60, 30, 20, 100, 50, 30, 20),
(4, 'Podding', 6.5, 6.0, 200, 150, 4.0, 2.0, 80, 60, 30, 20, 100, 50, 30, 20),
(4, 'Maturity', 6.5, 6.0, 150, 120, 4.0, 2.0, 80, 60, 30, 20, 100, 50, 30, 20),
(5, 'Seedling', 6.0, 5.5, 150, 120, 4.0, 2.0, 80, 60, 30, 20, 100, 50, 30, 20),
(5, 'Vegetative', 6.0, 5.5, 200, 150, 4.0, 2.0, 80, 60, 30, 20, 100, 50, 30, 20),
(5, 'Flowering', 6.0, 5.5, 200, 150, 4.0, 2.0, 80, 60, 30, 20, 100, 50, 30, 20),
(5, 'Podding', 6.0, 5.5, 200, 150, 4.0, 2.0, 80, 60, 30, 20, 100, 50, 30, 20),
(5, 'Maturity', 6.0, 5.5, 150, 120, 4.0, 2.0, 80, 60, 30, 20, 100, 50, 30, 20);

INSERT INTO crop_condition (crop_id, crop_stage, max_ph_level, min_ph_level, max_nutrient_content, min_nutrient_content, max_organic_matter, min_organic_matter, max_soil_moisture, min_soil_moisture, max_soil_temp, min_soil_temp, max_precipitation, min_precipitation, max_temperature, min_temperature) VALUES
(6, 'Seedling', 6.0, 5.0, 150, 120, 4.0, 2.0, 80, 60, 25, 20, 200, 50, 32, 25),
(6, 'Vegetative', 6.0, 5.0, 250, 200, 4.0, 2.0, 80, 60, 25, 20, 200, 50, 32, 25),
(6, 'Tuberization', 6.0, 5.0, 300, 250, 4.0, 2.0, 80, 60, 25, 20, 200, 50, 32, 25),
(6, 'Maturity', 6.0, 5.0, 250, 200, 4.0, 2.0, 80, 60, 25, 20, 200, 50, 32, 25),
(7, 'Seedling', 6.0, 5.5, 150, 120, 4.0, 2.0, 80, 60, 25, 20, 200, 50, 32, 25),
(7, 'Vegetative', 6.0, 5.5, 250, 200, 4.0, 2.0, 80, 60, 25, 20, 200, 50, 32, 25),
(7, 'Flowering', 6.0, 5.5, 300, 250, 4.0, 2.0, 80, 60, 25, 20, 200, 50, 32, 25),
(7, 'Maturity', 6.0, 5.5, 250, 200, 4.0, 2.0, 80, 60, 25, 20, 200, 50, 32, 25);

INSERT INTO crop_condition (crop_id, crop_stage, max_ph_level, min_ph_level, max_nutrient_content, min_nutrient_content, max_organic_matter, min_organic_matter, max_soil_moisture, min_soil_moisture, max_soil_temp, min_soil_temp, max_precipitation, min_precipitation, max_temperature, min_temperature) VALUES
(8, 'Germination', 7.0, 6.0, 150, 120, 4.0, 2.0, 80, 60, 30, 20, 150, 50, 30, 20),
(8, 'Vegetative', 7.0, 6.0, 250, 200, 4.0, 2.0, 80, 60, 30, 20, 150, 50, 30, 20),
(8, 'Flowering', 7.0, 6.0, 300, 250, 4.0, 2.0, 80, 60, 30, 20, 150, 50, 30, 20),
(8, 'Boll Formation', 7.0, 6.0, 300, 250, 4.0, 2.0, 80, 60, 30, 20, 150, 50, 30, 20),
(8, 'Boll Ripening', 7.0, 6.0, 250, 200, 4.0, 2.0, 80, 60, 30, 20, 150, 50, 30, 20);

INSERT INTO crop_condition (crop_id, crop_stage, max_ph_level, min_ph_level, max_nutrient_content, min_nutrient_content, max_organic_matter, min_organic_matter, max_soil_moisture, min_soil_moisture, max_soil_temp, min_soil_temp, max_precipitation, min_precipitation, max_temperature, min_temperature) VALUES
(9, 'Seedling', 6.5, 5.5, 200, 150, 4.0, 2.0, 80, 60, 18, 15, 150, 50, 30, 20),
(9, 'Vegetative', 6.5, 5.5, 300, 250, 4.0, 2.0, 80, 60, 20, 18, 150, 50, 30, 20),
(9, 'Flowering', 6.5, 5.5, 400, 350, 4.0, 2.0, 80, 60, 22, 20, 150, 50, 30, 20),
(9, 'Ripening', 6.5, 5.5, 350, 300, 4.0, 2.0, 80, 60, 25, 22, 150, 50, 30, 20);

INSERT INTO crop_condition (crop_id, crop_stage, max_ph_level, min_ph_level, max_nutrient_content, min_nutrient_content, max_organic_matter, min_organic_matter, max_soil_moisture, min_soil_moisture, max_soil_temp, min_soil_temp, max_precipitation, min_precipitation, max_temperature, min_temperature) VALUES
(10, 'Seedling', 5.5, 4.5, 200, 150, 5.0, 2.0, 85, 70, 25, 20, 300, 150, 25, 18),
(10, 'Vegetative', 5.5, 4.5, 350, 300, 5.0, 2.0, 85, 70, 25, 20, 300, 150, 25, 18),
(10, 'Flowering', 5.5, 4.5, 400, 350, 5.0, 2.0, 85, 70, 25, 20, 300, 150, 25, 18),
(10, 'Maturity', 5.5, 4.5, 350, 300, 5.0, 2.0, 85, 70, 25, 20, 300, 150, 25, 18);




