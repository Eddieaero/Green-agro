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

INSERT INTO crop_data (id, crop_field_id, date, temperature, rainfall, soil_moisture, pest_infestation_level, disease_incidence_level, yield)
VALUES
(1, 1, '2022-06-01', 28.5, 100, 0.25, 0.1, 0.05, 500),
(2, 1, '2022-06-15', 29.0, 80, 0.30, 0.2, 0.1, 550),
(3, 1, '2022-06-30', 30.0, 120, 0.35, 0.3, 0.2, 600),
(4, 2, '2022-07-01', 26.5, 70, 0.20, 0.05, 0.02, 400),
(5, 2, '2022-07-15', 27.0, 90, 0.25, 0.1, 0.03, 450),
(6, 2, '2022-07-30', 27.5, 110, 0.30, 0.2, 0.05, 500),
(7, 3, '2022-08-01', 25.5, 60, 0.15, 0.02, 0.01, 350),
(8, 3, '2022-08-15', 26.0, 80, 0.20, 0.05, 0.02, 400),
(9, 3, '2022-08-30', 27.0, 100, 0.25, 0.1, 0.03, 450);