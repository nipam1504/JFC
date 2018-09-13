<?php
session_start();
require 'db-config.php';
$name = $_REQUEST['sponser_name'];

$sql = "INSERT INTO sponser (name, status) VALUES ('$name', 'Active')";


if ($dbconnect->query($sql) === TRUE) {
return true;
} else {
    return false;
}


