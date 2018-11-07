<?php
require_once ('../../../../../../private/connectvars.php');

//echo 'Naam van de file: ' . $_FILES['uploaded_image']['name'] . '<br>';
//echo 'Grootte van file in bytes: ' . $_FILES['uploaded_image']['size'] . '<br>';
//echo 'Tijdelijke opslaglocatie: ' . $_FILES['uploaded_image']['tmp_name'];

// Image op de juiste plaats zetten (in map images)
$temp_location = $_FILES['uploaded_image']['tmp_name'];
$target_location = 'images/' . rand() . $_FILES['uploaded_image']['name'];

move_uploaded_file($temp_location, $target_location);

// Databasen van de image
$title = $_POST['title'];
$description = $_POST['description'];

$query = "INSERT INTO images VALUES (0,?,?,?)";
$stmt = $mysqli->prepare($query) or die ('Error preparing.');
$stmt->bind_param('sss',$target_location,$title,$description) or die ('Error binding params.');
$stmt->execute() or die ('Error inserting image in database.');
$stmt->close();

header('Location: homepage_logged.php');
