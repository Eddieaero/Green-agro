<?php
include "db/dbconfig.php";

$crops = $_POST['crops'];
$crop_list = implode(",", $crops);
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];
$area = $_POST['area'];

// create field
$field_id = 0;

// update field id in session
$_SESSION['field'] = $field_id;