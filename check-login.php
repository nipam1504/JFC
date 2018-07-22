<?php
session_start();
require 'db-config.php';

if ( isset($_POST['user_name']) && isset($_POST['user_password']) ) {
    
    $sql_check = "SELECT user_profile, 
                         user_level, 
                         id_user
                  FROM login_users 
                  WHERE 
                       user_name=? 
                       AND 
                       user_password=? 
                  LIMIT 1";

    $check_log = $dbconnect->prepare($sql_check);
    $check_log->bind_param('ss', $user_name, $user_password);

    $user_name = $_POST['user_name'];
    $user_password = md5( $_POST['user_password'] );

    $check_log->execute();

    $check_log->store_result();

    if ( $check_log->num_rows == 1 ) {
        $check_log->bind_result($user_profile, $user_level, $id_user);

        while ( $check_log->fetch() ) {
            $_SESSION['user_login'] = $user_level;
            $_SESSION['sess_id']    = $id_user;
            $_SESSION['user_profile'] = $user_profile;
            
        }

        $check_log->close();

        header('location:session_page/'.$user_level);
        exit();

    } else {
        header('location: login.php?error='.base64_encode('Invalid Username or Password !'));
        exit();
    }

   
} else {
    header('location:login.php');
    exit();
}