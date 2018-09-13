<?php
session_start();
require 'db-config.php';
$firstName = $_REQUEST['first_name'];
$lastName = $_REQUEST['last_name'];
$gender = $_REQUEST['gender'];
$dateofbirth = $_REQUEST['dob'];
$country = $_REQUEST['country'];
$address1 = $_REQUEST['address1'];
$address2 = $_REQUEST['address2'];
$address3 = $_REQUEST['address3'];
$taluka = $_REQUEST['taluka'];
$village = $_REQUEST['village'];
$city = $_REQUEST['city'];
$state = $_REQUEST['state'];
$district = $_REQUEST['district'];
$city = $_REQUEST['city'];
$zip = $_REQUEST['zip'];
$phone1 = $_REQUEST['phone1'];
$phone2 = $_REQUEST['phone1'];
$caste = $_REQUEST['caste'];
$gsi = $_REQUEST['GSI'];
$bpl = $_REQUEST['BPL'];
$aidtogive = $_REQUEST['Aid'];


 $sql = "INSERT INTO user (username, gender, userdob, address, taluka, village, city, district, state, country, userphone1, userphone2, zipcode, caste, gsi, bpl)
VALUES ('$firstName', '$gender', '$dateofbirth', '$address1', '$taluka', '$village', '$city', '$district', '$state', '$country', '$phone1' , '$phone2', '$zip', '$caste' , '$gsi', '$bpl')";

if ($dbconnect->query($sql) === TRUE) {
    $_SESSION['suc_msg'] = "Data submitted successfully.";
    $_SESSION['suc_msg_type'] = "Success";
} else {
    $_SESSION['suc_msg'] = "Something went wrong, Please try again.";
    $_SESSION['suc_msg_type'] = "Error";

}
header('location:newCase2.php');
