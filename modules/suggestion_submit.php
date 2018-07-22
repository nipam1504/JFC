<?php

require 'db-config.php';
$firstName = $_REQUEST['first_name'];
$lastName = $_REQUEST['last_name'];
$phone = $_REQUEST['phone1'];
$attendBy = $_REQUEST['attendedBy'];
$reason = addslashes($_REQUEST['reason']);
$suggestion = $_REQUEST['suggestion'];
$date = gmdate('Y-m-d H:i:s');

$sql = "INSERT INTO feedback (firstName, lastName, phoneNumber1, attendBy, reason, suggestion, created_at, updated_at, status)
VALUES ('$firstName', '$lastName', '$phone', '$attendBy', '$reason', '$suggestion', '$date', '$date', 1)";

if ($dbconnect->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $dbconnect->error;
}

header('location:suggestion.php');
