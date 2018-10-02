<?php
session_start();
require 'db-config.php';
$memberName = $_REQUEST['member_name'];
$memberRole = $_REQUEST['member_role'];
$memberPassword = $_REQUEST['member_password'];
$newpass=md5($memberPassword);

$sql = "INSERT INTO login_users (user_name, user_level, user_password) VALUES ('$memberName', '$memberRole','$newpass')";


if ($dbconnect->query($sql) === TRUE) {
    $_SESSION['suc_msg'] = "Data submitted successfully.";
    $_SESSION['suc_msg_type'] = "Success";
} else {
    $_SESSION['suc_msg'] = "Something went wrong, Please try again.";
    $_SESSION['suc_msg_type'] = "Error";

}

header('location:addMember.php');
