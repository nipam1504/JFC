<?php

require 'db-config.php';
$campName = $_REQUEST['camp_name'];
$startDate = $_REQUEST['startDate'];
$endDate = $_REQUEST['endDate'];
$sponsorName = $_REQUEST['sponsor_name'];
$grantType = $_REQUEST['grantType'];
$campType = $_REQUEST['campType'];
$campMode = $_REQUEST['campMode'];
$campStatus = $_REQUEST['campStatus'];


$sql = "INSERT INTO campdetails (campName, startDate, endDate, sponsorName, grantType, campType, campMode, campStatus)
VALUES ('$campName', '$startDate', '$endDate', '$sponsorName', '$grantType', '$campType', '$campMode', '$campStatus')";

if ($dbconnect->query($sql) === TRUE) {
    echo '<script language="javascript">';
	echo 'alert("message successfully sent")';
	echo '</script>';
} else {
	echo '<script language="javascript">';
echo 'alert("message not sent")';
echo '</script>';
    echo "Error: " . $sql . "<br>" . $dbconnect->error;
}

header('location:addCamp.php');
