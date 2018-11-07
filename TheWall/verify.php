<?php
//require ('private/connectvars.php');
require ('../../../../../../private/connectvars.php');

// Checken of de mail klopt met de hash
$query = "SELECT userid FROM users WHERE email = ? AND hash = ?";
$stmt = $mysqli->prepare($query) or die ('Error preparing for SELECT.');
$stmt->bind_param('ss',$email, $hash);
$email = $_GET['email'];
$hash = $_GET['hash'];
$stmt->execute();
$stmt->bind_result($userid);
$row = $stmt->fetch();
if (!$userid) {
    echo 'Sorry, but i dont recognize this email and hash combination';
    exit();
}
$stmt->close();

// Account activeren
$query = "UPDATE users SET active = 1 WHERE userid = ?";
$stmt = $mysqli->prepare($query) or die ('Error preparing for UPDATE.');
$stmt->bind_param('i',$userid);
$stmt->execute() or die ('Error updating.');
echo 'Your account is activated';
