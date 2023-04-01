
<?php
include "db/dbconfig.php";
$crops = $_SESSION['crops'];
// Process the form data
$lat = $_POST['lat'];
$lng = $_POST['lng'];

// create new field data
$field_id = rand(890, 5000);
$name = "Field_" . $field_id;
$desc = "Field created at: " . date("Y-m-d H:i:s");
$owner = $_SESSION['id'];

$field_query = "INSERT INTO field (id, name, description, owner, latitude, longitude) VALUES ('$field_id', '$name', '$desc', '$owner', '$lat', '$lng')";
$conn->query($field_query);
$field_id = mysqli_insert_id($conn);
// update session field id
$_SESSION['field'] = $field_id;

// for each crop get time till harvest
foreach ($crops as $crop) {
    $crop_query = "SELECT * FROM crop WHERE id = '$crop'";
    $crop_row = $conn->query($crop_query)->fetch_assoc();
    $time = $crop_row['days_to_harvest'];

    // create new crop data
    $crop_data_id = rand(890, 5000);
    $crop = $crop_row['id'];
    $field_id = $crop_row['name'];
    $crop_field = $field_id;
    $crop_plant_date = date("Y-m-d H:i:s");
    $crop_time = date('Y-m-d H:i:s', strtotime("+$time days"));
    $crop_query = "INSERT INTO crops (id, crop_id, field_id, plant_date, time_to_harvest) VALUES ('$crop_data_id', '$crop', '$crop_field', '$crop_plant_date', '$crop_time')";
    $crop_result = mysqli_query($conn, $crop_query);
}

header('Location: dashboard.php');
?>