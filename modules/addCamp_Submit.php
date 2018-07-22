<?php
session_start();

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
    $_SESSION['suc_msg'] = "Data submitted successfully.";
    $_SESSION['suc_msg_type'] = "Success";
} else {
    $_SESSION['suc_msg'] = "Something went wrong, Please try again.";
    $_SESSION['suc_msg_type'] = "Error";

}
header('location:addCamp.php');
