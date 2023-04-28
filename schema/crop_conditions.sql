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

-- crop stages
CREATE TABLE crop_stages (
  id INT AUTO_INCREMENT PRIMARY KEY,
  crop_id INT NOT NULL,
  crop_stage VARCHAR(255) NOT NULL,
  expected_week VARCHAR(255) NOT NULL,
  observable_changes VARCHAR(255) NOT NULL,
  possible_issues VARCHAR(255) NOT NULL,
  soil_conditions VARCHAR(255) NOT NULL,
  care_instructions TEXT NOT NULL
);

-- care instruction
CREATE TABLE care_instructions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    crop_id INT NOT NULL,
    instruction_text TEXT NOT NULL
);


-- populate the tables
INSERT INTO crop_stages (crop_id, crop_stage, expected_week, observable_changes, possible_issues, soil_conditions, care_instructions)
VALUES 
  -- Maize
  (1, 'Germination', '1-2', 'Seeds begin to sprout', 'Damping off may occur with overwatering', 'Well-drained soil, moist but not waterlogged', 'Keep soil moist but not waterlogged; thin seedlings to prevent overcrowding; watch for pests and treat with appropriate methods'),
  (1, 'Vegetative', '3-8', 'Leaves begin to grow; plant grows taller', 'Weeds can compete with plant for nutrients and water', 'Moist, well-drained soil with adequate nutrients', 'Water regularly; remove weeds; watch for pests and treat with appropriate methods; provide support if necessary'),
  (1, 'Tasseling', '9-11', 'Tassels appear at the top of the plant', 'Inadequate water or nutrients can stunt growth', 'Moist, well-drained soil with adequate nutrients', 'Water regularly; fertilize as needed; watch for pests and treat with appropriate methods; provide support if necessary'),
  (1, 'Flowering', '12-14', 'Flowers appear at the top of the plant', 'Pests and diseases can damage plant and reduce yield', 'Moist, well-drained soil with adequate nutrients', 'Water regularly; fertilize as needed; watch for pests and treat with appropriate methods; provide support if necessary'),
  (1, 'Grain filling', '15-18', 'Ears begin to fill with grain', 'Lack of nutrients or water can reduce yield', 'Moist, well-drained soil with adequate nutrients', 'Water regularly; fertilize as needed; watch for pests and treat with appropriate methods; provide support if necessary'),
  (1, 'Ripening', '19-22', 'Grain begins to dry and turn golden', 'Overripe ears may fall and rot on the ground', 'Moist, well-drained soil with adequate nutrients', 'Harvest at peak ripeness; remove overripe ears to prevent pest infestations');
  
  INSERT INTO crop_stages (crop_id, crop_stage, expected_week, observable_changes, possible_issues, soil_conditions, care_instructions)
VALUES 
(2, 'Germination', 1, 'Seedling emergence', 'Poor seed quality, waterlogging, pests and diseases', 'Well-drained soil, high moisture content', 'Care Instructions:\nSeeds should be soaked before planting to speed up germination.\nSeeds should be planted 2-3 cm deep in moist soil.\nWatering should be done regularly to ensure the soil remains moist.\nSeedlings should be protected from pests and diseases.\n'),
(2, 'Vegetative', 2, 'Leaf and stem growth', 'Nutrient deficiencies, pests and diseases', 'Well-drained soil, high moisture content, pH 5.5-6.5', 'Care Instructions:\nFertilizer should be applied to ensure adequate nutrient supply.\nPests and diseases should be controlled through the use of pesticides or natural methods such as companion planting or crop rotation.\nWeeds should be removed to prevent competition for nutrients and water.\nPollinators (e.g. bees, butterflies) should be encouraged to visit the crop to ensure adequate pollination.\n'),
(2, 'Reproductive', 5, 'Panicle emergence', 'Water stress, pests and diseases', 'Well-drained soil, moderate moisture content', 'Care Instructions:\nWatering should be done regularly to ensure the soil remains moist.\nPests and diseases should be controlled through the use of pesticides or natural methods such as companion planting or crop rotation.\nWeeds should be removed to prevent competition for nutrients and water.\nPollinators (e.g. bees, butterflies) should be encouraged to visit the crop to ensure adequate pollination.\n'),
(2, 'Maturity', 8, 'Grain ripening', 'Birds, rodents, lodging', 'Well-drained soil, moderate moisture content', 'Care Instructions:\nHarvesting should be done at peak ripeness to ensure the best flavor and nutrient content.\nOverripe grain should be removed to prevent pests from infesting the crop.\nBirds and rodents should be kept away from the crop.\nStems should be removed after harvesting to prevent lodging.\n');

INSERT INTO crop_stages (crop_id, crop_stage, expected_week, observable_changes, possible_issues, soil_conditions, care_instructions) VALUES
(3, 'Planting', '1-2', 'Cassava stem is planted in the soil.', 'Stem rot, pests, or inadequate moisture.', 'Loose soil with good drainage and high organic matter.', 'Cut the stem to 20-30cm length and plant horizontally in furrows 10-15cm deep. Keep the soil moist but not waterlogged.'),
(3, 'Growth', '3-5', 'Cassava stems start to sprout and grow leaves.', 'Drought, pests, or nutrient deficiency.', 'Well-draining soil with a pH between 5.5 and 7.0, high in phosphorus and potassium.', 'Water regularly, fertilize with phosphorus and potassium, and control pests.'),
(3, 'Harvest', '9-24', 'Cassava roots are ready for harvest when leaves turn yellow and begin to fall off.', 'Root rot, pest damage, or post-harvest spoilage.', 'Sandy or loamy soil with good drainage, and a pH between 4.5 and 7.5.', 'Harvest roots when they are mature, cut the stems and remove the root from the soil, store harvested roots in a cool and dry place.');

INSERT INTO crop_stages (crop_id, crop_stage, expected_week, observable_changes, possible_issues, soil_conditions, care_instructions)
VALUES
(4, 'Planting', '1-2', 'Seeds are planted in soil.', 'Seed rot, pests, or inadequate moisture.', 'Well-drained soil with high organic matter, pH between 6.0 and 6.5.', 'Plant seeds 1-2 inches deep, water regularly but do not overwater.'),
(4, 'Growth', '3-5', 'Bean plants begin to grow leaves and stems.', 'Drought, pests, or nutrient deficiency.', 'Well-draining soil with a pH between 6.0 and 7.0, high in nitrogen and potassium.', 'Water regularly, fertilize with nitrogen and potassium, and control pests.'),
(4, 'Flowering', '6-8', 'Plants begin to produce flowers.', 'Fungal diseases, insect damage, or inadequate pollination.', 'Same as growth stage.', 'Control pests and diseases, encourage pollinators to visit the crop.'),
(4, 'Pod Development', '8-10', 'Beans begin to form in pods on the plant.', 'Insect damage, pod rot, or nutrient deficiency.', 'Same as growth stage.', 'Control pests and diseases, fertilize with nitrogen and potassium.'),
(4, 'Harvest', '11-14', 'Beans are ready for harvest when the pods turn yellow and dry out.', 'Pest damage, pod rot, or post-harvest spoilage.', 'Same as growth stage.', 'Harvest beans when they are mature, remove the pods from the plant, and store in a cool and dry place.');


INSERT INTO crop_stages (crop_id, crop_stage, expected_week, observable_changes, possible_issues, soil_conditions, care_instructions) VALUES
(5, 'Planting', '1-2', 'Peanut seeds are planted in the soil.', 'Inadequate moisture or soil compaction.', 'Well-draining soil with a pH between 5.5 and 6.5, high in phosphorus and potassium.', 'Plant seeds in well-drained soil and maintain consistent moisture.'),
(5, 'Growth', '3-4', 'Peanut plants begin to grow and develop leaves.', 'Pest damage or nutrient deficiency.', 'Loamy or sandy soil with good drainage and a pH between 5.5 and 6.5.', 'Fertilize with nitrogen, control pests, and remove weeds.'),
(5, 'Flowering', '5-6', 'Peanut plants produce yellow flowers which develop into pods.', 'Pest damage or inadequate moisture.', 'Sandy soil with good drainage and a pH between 5.5 and 6.5.', 'Water regularly and control pests.'),
(5, 'Pod Maturity', '12-14', 'Peanut pods are ready for harvest when the leaves turn yellow.', 'Fungal infection or insect damage.', 'Sandy or loamy soil with good drainage and a pH between 5.5 and 6.5.', 'Harvest mature pods, remove from the soil, and dry in the sun for a few days. Store in a cool and dry place.');

INSERT INTO crop_stages (crop_id, crop_stage, expected_week, observable_changes, possible_issues, soil_conditions, care_instructions) VALUES
(6, 'Pre-planting', '1-3', 'Sweet potato vine cuttings are prepared.', 'Planting in the wrong season, pests, or disease.', 'Loose, well-drained soil rich in organic matter with a pH between 5.0 and 6.5.', 'Choose healthy, disease-free cuttings from the vine. Cut the vine into 30-45 cm long pieces, remove the leaves from the lower 2/3 of the cutting, and let them dry in a shaded place for a day.'),
(6, 'Planting', '4-6', 'Sweet potato cuttings are planted in the soil.', 'Drought, pests, or disease.', 'Loose, well-drained soil rich in organic matter with a pH between 5.0 and 6.5.', 'Plant cuttings in rows, with a spacing of 30-60 cm between rows and 15-30 cm between plants. Water regularly.'),
(6, 'Growth', '7-12', 'Sweet potato vines grow and spread.', 'Pests, disease, or nutrient deficiency.', 'Loose, well-drained soil rich in organic matter with a pH between 5.0 and 6.5.', 'Weed regularly and apply fertilizer as needed. Keep the soil moist but not waterlogged.'),
(6, 'Harvest', '16-20', 'Sweet potato vines start to yellow and wither.', 'Pests, disease, or damage during harvest.', 'Loose, well-drained soil rich in organic matter with a pH between 5.0 and 6.5.', 'Harvest sweet potatoes when the vines have withered. Use a fork or shovel to loosen the soil around the plants, then carefully pull up the sweet potatoes. Store harvested sweet potatoes in a cool and dry place.');

INSERT INTO crop_stages (crop_id, crop_stage, expected_week, observable_changes, possible_issues, soil_conditions, care_instructions) VALUES
(7, 'Planting', '1-2', 'Sorghum seed is planted in the soil.', 'Birds, pests, or inadequate moisture.', 'Sandy loam with good drainage and a pH between 5.5 and 7.5.', 'Plant seeds in furrows 3-4cm deep, spaced 15-20cm apart. Water regularly and control pests.'),
(7, 'Growth', '3-6', 'Sorghum seedlings begin to sprout and grow.', 'Drought, pests, or nutrient deficiency.', 'Well-draining soil with a pH between 5.5 and 7.5, high in nitrogen and phosphorus.', 'Water regularly, fertilize with nitrogen and phosphorus, and control pests.'),
(7, 'Tillering', '6-8', 'Sorghum plants begin to develop multiple shoots or tillers.', 'Drought, pests, or nutrient deficiency.', 'Well-draining soil with a pH between 5.5 and 7.5, high in nitrogen and phosphorus.', 'Water regularly, fertilize with nitrogen and phosphorus, and control pests.'),
(7, 'Flowering', '8-10', 'Sorghum plants produce flowers.', 'Drought, pests, or nutrient deficiency.', 'Well-draining soil with a pH between 5.5 and 7.5, high in nitrogen and phosphorus.', 'Water regularly, fertilize with nitrogen and phosphorus, and control pests.'),
(7, 'Milk Stage', '12-14', 'Grain is in the milk stage, where the seed is still soft and white.', 'Drought, pests, or nutrient deficiency.', 'Well-draining soil with a pH between 5.5 and 7.5, high in nitrogen and phosphorus.', 'Water regularly, fertilize with nitrogen and phosphorus, and control pests.'),
(7, 'Dough Stage', '16-18', 'Grain is in the dough stage, where the seed is harder and has a dough-like consistency.', 'Drought, pests, or nutrient deficiency.', 'Well-draining soil with a pH between 5.5 and 7.5, high in nitrogen and phosphorus.', 'Water regularly, fertilize with nitrogen and phosphorus, and control pests.'),
(7, 'Ripening', '20-22', 'Grain is ripe and ready for harvest.', 'Birds, pests, or post-harvest spoilage.', 'Well-draining soil with a pH between 5.5 and 7.5, high in nitrogen and phosphorus.', 'Harvest grain when it is mature, dry, and ready to be threshed. Store harvested grain in a cool and dry place to prevent spoilage.');

INSERT INTO crop_stages (crop_id, crop_stage, expected_week, observable_changes, possible_issues, soil_conditions, care_instructions) VALUES
(8, 'Planting', '1-2', 'Cotton seeds are planted in the soil.', 'Pest damage, poor seed quality, or inadequate moisture.', 'Well-draining soil with a pH between 5.8 and 6.5.', 'Plant seeds in soil that has been tilled and cleared of debris, keep soil moist but not waterlogged, and protect seedlings from pests.'),
(8, 'Vegetative', '3-5', 'Cotton plants begin to grow and develop leaves.', 'Pest damage, nutrient deficiency, or drought.', 'Well-draining soil with a pH between 5.8 and 6.5, high in nitrogen, phosphorus, and potassium.', 'Fertilize with nitrogen, phosphorus, and potassium, control pests and weeds.'),
(8, 'Flowering', '6-8', 'Cotton plants produce flowers that develop into bolls.', 'Pest damage, weather stress, or nutrient deficiency.', 'Well-draining soil with a pH between 5.8 and 6.5, high in phosphorus and potassium.', 'Irrigate as needed, control pests and weeds, harvest bolls when they are mature.'),
(8, 'Boll Ripening', '9-12', 'Cotton bolls begin to mature and open, revealing white fiber.', 'Pest damage, weather stress, or inadequate moisture.', 'Well-draining soil with a pH between 5.8 and 6.5, high in phosphorus and potassium.', 'Monitor boll development, harvest when the majority of bolls have opened and the fibers are exposed.'),
(8, 'Harvest', '13-16', 'Cotton bolls are harvested and processed for fiber.', 'Pest damage, weather stress, or post-harvest spoilage.', 'Well-draining soil with a pH between 5.8 and 6.5.', 'Harvest bolls when they are mature and dry, remove the fibers from the seeds, and process the fiber for use or sale.');

INSERT INTO crop_stages (crop_id, crop_stage, expected_week, observable_changes, possible_issues, soil_conditions, care_instructions) VALUES
(9, 'Planting', '1-2', 'Seeds are planted in the soil.', 'Drought, pests, or inadequate moisture.', 'Well-draining soil, pH between 6.0 and 6.5, high in organic matter and nitrogen.', 'Plant seeds 1-2 inches deep and keep soil moist until seedlings emerge.'),
(9, 'Growth', '3-6', 'Coffee plants start to grow and produce leaves and branches.', 'Disease, pests, or nutrient deficiency.', 'Sandy loam with good drainage and a pH between 6.0 and 6.5, high in phosphorus and potassium.', 'Water regularly, fertilize with phosphorus and potassium, and control pests and diseases.'),
(9, 'Flowering', '9-11', 'White flowers appear on the coffee plant.', 'Inadequate pollination, pests, or disease.', 'Well-draining soil with good moisture retention, pH between 6.0 and 6.5.', 'Encourage pollination through the use of pollinators or by hand.'),
(9, 'Harvest', '24-28', 'Berries are ripe and ready to harvest.', 'Birds, pests, or weather damage.', 'Well-draining soil with a pH between 6.0 and 6.5, high in organic matter and nitrogen.', 'Harvest only fully ripe berries and dry them properly before storage.');

INSERT INTO crop_stages (crop_id, crop_stage, expected_week, observable_changes, possible_issues, soil_conditions, care_instructions) VALUES
(10, 'Nursery', '1-8', 'Seeds are sown in nursery beds and germinate within a week.', 'Fungal diseases, pests, or inadequate moisture.', 'Loose soil with good drainage and high organic matter, with a pH between 5.0 and 6.0.', 'Water regularly, control pests, and use fungicides if necessary.'),
(10, 'Transplanting', '8-12', 'Seedlings are transplanted into main fields.', 'Transplant shock, pests, or inadequate moisture.', 'Well-draining soil with a pH between 5.0 and 6.0, high in organic matter and nitrogen.', 'Water regularly, control pests, and provide shade for young plants.'),
(10, 'Growth', '12-20', 'Tea bushes grow and develop leaves.', 'Pests, diseases, or nutrient deficiency.', 'Well-draining soil with a pH between 4.5 and 5.5, high in organic matter and nitrogen.', 'Fertilize with nitrogen and control pests and diseases.'),
(10, 'Pruning', '24-36', 'Tea bushes are pruned to promote new growth.', 'Overpruning or underpruning can cause yield reduction.', 'Well-draining soil with a pH between 4.5 and 5.5, high in organic matter and nitrogen.', 'Prune bushes to promote new growth and remove dead or damaged branches.'),
(10, 'Harvest', '36-48', 'Tea leaves are harvested by hand or machine.', 'Overharvesting can reduce yield and quality.', 'Well-draining soil with a pH between 4.5 and 5.5, high in organic matter and nitrogen.', 'Harvest leaves when they are mature and pluck only the top two leaves and a bud. Process the leaves immediately after harvest.');

