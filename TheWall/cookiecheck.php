<?php

// Checken of de userid en de hash een match zijn in de db
//require ('private/connectvars.php');
require ('../../../../../../private/connectvars.php');
$query = "SELECT userid FROM users WHERE userid = ? AND hash = ?";
$stmt = $mysqli->prepare($query) or die ('Error preparing.');
$stmt->bind_param('is',$userid,$hash) or die ('Error binding params.');
$userid = $_COOKIE['userid'];
$hash = $_COOKIE['hash'];
$stmt->execute() or die ('Error executing.');
$fetch_success = $stmt->fetch();

if (!$fetch_success) {
header('Location: logout.php');
}
