<?php

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
$district = $_REQUEST['district1'];
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
    echo '<script language="javascript">';
	echo 'alert("message successfully sent")';
	echo '</script>';
} else {
	echo '<script language="javascript">';
echo 'alert("message not sent")';
echo '</script>';
    echo "Error: " . $sql . "<br>" . $dbconnect->error;
}

//header('location:newCase2.php');
