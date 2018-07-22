<?php

require 'db-config.php';
$memberName = $_REQUEST['member_name'];
$memberRole = $_REQUEST['member_role'];


$sql = "INSERT INTO member (membername, memberrole) VALUES ('$memberName', '$memberRole')";

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

header('location:addMember.php');
