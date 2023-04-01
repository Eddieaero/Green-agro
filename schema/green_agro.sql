CREATE TABLE user (
  id INT PRIMARY KEY,
  username VARCHAR(255),
  password TEXT
);

CREATE TABLE crop (
  id INT PRIMARY KEY,
  name VARCHAR(255),
  description TEXT
);

CREATE TABLE field (
  id INT PRIMARY KEY,
  name VARCHAR(255),
  description TEXT,
  latitude FLOAT,
  longitude FLOAT
  owner INT,
  FOREIGN KEY (owner) REFERENCES user(id),
);

CREATE TABLE crop_field (
  id INT PRIMARY KEY,
  crop_id INT,
  field_id INT,
  planting_date DATE,
  harvest_date DATE,
  FOREIGN KEY (crop_id) REFERENCES crop(id),
  FOREIGN KEY (field_id) REFERENCES field(id)
);

CREATE TABLE crop_data (
  id INT PRIMARY KEY,
  crop_field_id INT,
  date DATE,
  temperature FLOAT,
  rainfall FLOAT,
  soil_moisture FLOAT,
  pest_infestation_level FLOAT,
  disease_incidence_level FLOAT
);