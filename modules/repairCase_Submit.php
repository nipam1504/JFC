<?php
session_start();
require 'db-config.php';
/*
$sql = "INSERT INTO user (firstname, lastname, gender, userdob, userphone1, userphone2, caste)
VALUES ('$firstName', '$lastName', '$gender', '$dateofbirth', '$phone1' , '$phone2', '$caste')";
if ($dbconnect->query($sql) === TRUE) {
    $_SESSION['suc_msg'] = "Data submitted successfully.";
    $_SESSION['suc_msg_type'] = "Success";
} else {
    echo "Issue  in query sql";

    $_SESSION['suc_msg'] = "Something went wrong, Please try again.";
    $_SESSION['suc_msg_type'] = "Error";

}

$sql1 = "SELECT max(userid) FROM user WHERE userdob='$dateofbirth' AND firstname='$firstName'";
$resultuid = $dbconnect->query($sql1);
while($row = $resultuid->fetch_assoc()) {

        $currentuser=$row['max(userid)'];
    $_SESSION['cuserid'] = $currentuser;
    echo "User id : $currentuser";
}
if(isset($_REQUEST['address1'])){
    $username = $_REQUEST['address1'];
    if ($username==null || !$username) {
        echo "User name is null";
    }
    else{
        echo $username;
        $address1 = $_REQUEST['address1'];
        $address2 = $_REQUEST['address2'];
        $address3 = $_REQUEST['address3'];
        $taluka = $_REQUEST['taluka'];
        $village = $_REQUEST['village'];
        $city = $_REQUEST['city'];
        $state = $_REQUEST['state'];
        $district = $_REQUEST['district1'];
        $zip = $_REQUEST['zip'];

        $sqlnew = "INSERT INTO useraddress (userid, address1, address2, address3, taluka, village, city, district, state, country, zip, casekey)
VALUES ('$currentuser','$address1','$address2','$address3', '$taluka', '$village', '$city', '$district', '$state', '$country', '$zip', '$case_key' )";
    }
}
else{
   echo "No address found";
    $sqlnew = "INSERT INTO useraddress (userid, country, casekey)
                            VALUES ('$currentuser','$country', '$case_key')";
}

if ($dbconnect->query($sqlnew) === TRUE) {
    $_SESSION['suc_msg'] = "Data submitted successfully.";
    $_SESSION['suc_msg_type'] = "Success";
} else {
    $_SESSION['suc_msg'] = "Something went wrong, Please try again.";
    $_SESSION['suc_msg_type'] = "Error";
    echo "Issue in sqlnew";
}

if($gsi == 'yes'){
    $gsinum = $_REQUEST['gsi_num'];
    $sqlgsi = "UPDATE user SET gsi ='$gsinum' WHERE userid='$currentuser'";
    $dbconnect->query($sqlgsi);
}
else{
    $sqlgsi = "UPDATE user SET gsi='0000000000' WHERE userid='$currentuser'";
    $dbconnect->query($sqlgsi);
}

if($bpl == 'yes'){
    $bplnum = $_REQUEST['bplnum'];
    $sqlbpl = "UPDATE user SET bpl = '$bplnum' WHERE userid='$currentuser'";
    $dbconnect->query($sqlbpl);
}
else{
    $sqlbpl = "UPDATE user SET bpl = '0000000' WHERE userid='$currentuser'";
    $dbconnect->query($sqlbpl);
}*/

if(isset($_REQUEST['case_key'])) {
    $casekey = $_REQUEST["case_key"];
    if ($casekey == null || !$casekey) {
        echo "Case is null";
        $casedata = $_REQUEST['case_data'];
        $firstName = $_REQUEST['first_name'];
        $lastName = $_REQUEST['last_name'];
        $gender = $_REQUEST['gender'];
        $dateofbirth = $_REQUEST['dob'];
        $country = $_REQUEST['country'];
        $phone1 = $_REQUEST['phone1'];
        $phone2 = $_REQUEST['phone1'];
        $caste = $_REQUEST['caste'];
        $gsi = $_REQUEST['GSI'];
        $bpl = $_REQUEST['BPL'];
        $address1 = $_REQUEST['address1'];
        $address2 = $_REQUEST['address2'];
        $address3 = $_REQUEST['address3'];
        $taluka = $_REQUEST['taluka'];
        $village = $_REQUEST['village'];
        $city = $_REQUEST['city'];
        $state = $_REQUEST['state'];
        //$district = $_REQUEST['district1'];
        $zip = $_REQUEST['zip'];
        $aidRecommand = $_REQUEST['aidRecommand'];
        $side = $_REQUEST['side'];
        $cause = $_REQUEST['cause'];
        $campid = $_SESSION['camp_id'];
        $loginuid =  $_SESSION['sess_id'];
        $campQuery = "Select campName from campdetails where camp_id = $campid";
        $campData = $dbconnect->query($campQuery);
        $campName = "Base Camp";
        while($row1 = $campData->fetch_assoc()) {
            $campName = $row1['campName'];
        }
        $_SESSION['camp_name'] = $campName;

        $caseKeynew = substr($_SESSION['camp_name'],0,3).$campid.$loginuid.date('dmy').(rand(999, 9999));

        $sql = "INSERT INTO user (firstname, lastname, gender, userdob, userphone1, userphone2, caste, gsi, bpl)
VALUES ('$firstName', '$lastName', '$gender', '$dateofbirth', '$phone1' , '$phone2', '$caste' , '$gsi' , '$bpl')";
        if ($dbconnect->query($sql) === TRUE) {
            $_SESSION['suc_msg'] = "Data submitted successfully.";
            $_SESSION['suc_msg_type'] = "Success";
        } else {
            echo "Issue  in query sql";

            $_SESSION['suc_msg'] = "Something went wrong, Please try again.";
            $_SESSION['suc_msg_type'] = "Error";
    echo "$sql";
        }

        $sql1 = "SELECT max(userid) FROM user WHERE userdob='$dateofbirth' AND firstname='$firstName'";
        $resultuid = $dbconnect->query($sql1);
        while($row = $resultuid->fetch_assoc()) {

            $currentuser=$row['max(userid)'];
            $_SESSION['cuserid'] = $currentuser;
            echo "User id : $currentuser";
        }
   $newuserid =  $_SESSION['cuserid'];
        $sqlnew = "INSERT INTO useraddress (userid, address1, address2, address3, taluka, village, city, state, country, zip, casekey)
VALUES ('$newuserid','$address1','$address2','$address3', '$taluka', '$village', '$city', '$state', '$country', '$zip', '$caseKeynew' )";
        if ($dbconnect->query($sqlnew) === TRUE) {
            $_SESSION['suc_msg'] = "Data submitted successfully.";
            $_SESSION['suc_msg_type'] = "Success";
        } else {
            $_SESSION['suc_msg'] = "Something went wrong, Please try again.";
            $_SESSION['suc_msg_type'] = "Error";
            echo "Issue in sqlnew";
        }
        $today = date('Y-m-d');
        $sql2 = "INSERT INTO casedata (userid, aidrecom, createdat, side, usercod, case_key)
VALUES ('$newuserid','$aidRecommand', '$today','$side', '$cause', '$caseKeynew' )";
        if ($dbconnect->query($sql2) === TRUE) {
            $_SESSION['suc_msg'] = "Data submitted successfully.";
            $_SESSION['suc_msg_type'] = "Success";
            echo "True";
            //header('location:selectCaseType.php');
        } else {
            echo "Issue  in query sql";

            $_SESSION['suc_msg'] = "Something went wrong, Please try again.";
            $_SESSION['suc_msg_type'] = "Error";
            echo $sql2;

        }

        $causeOfRepair = $_REQUEST["repairCause"];
        $repairBy = $_REQUEST["repairBy"];
        $repairDate = $_REQUEST["repairDate"];
        $repairWorkInfo = $_REQUEST["repairWorkInfo"];
        $repairMasterNum = $_REQUEST["repairMasterNumber"];
        $repairMasterDate = $_REQUEST["repairMasterDate"];
        $repairIDDOc = $_REQUEST["proofyn"];

        $sqlrepair = "INSERT INTO repairdata (casekey,userid, cor, repairby, repairdate, repairwork, repairmasternum, repairmasterdate, casereason)
        VALUES ('$caseKeynew','$newuserid', '$causeOfRepair', '$repairBy', '$repairDate', '$repairWorkInfo', '$repairMasterNum','$repairMasterDate', '$casedata')";
        if ($dbconnect->query($sqlrepair) === TRUE) {
            $_SESSION['suc_msg'] = "Data submitted successfully.";
            $_SESSION['suc_msg_type'] = "Success";
            echo "True";
            //header('location:selectCaseType.php');
        } else {
            echo "Issue  in query sql";

            $_SESSION['suc_msg'] = "Something went wrong, Please try again.";
            $_SESSION['suc_msg_type'] = "Error";
            echo "                 $sqlrepair";
        }
    }

    else {
        echo "Case key present $casekey";

        $userid = $_REQUEST["userid"];
        $causeOfRepair = $_REQUEST["repairCause"];
        $repairBy = $_REQUEST["repairBy"];
        $repairDate = $_REQUEST["repairDate"];
        $repairWorkInfo = $_REQUEST["repairWorkInfo"];
        $repairMasterNum = $_REQUEST["repairMasterNumber"];
        $repairMasterDate = $_REQUEST["repairMasterDate"];
        $repairIDDOc = $_REQUEST["proofyn"];
        $sql = "INSERT INTO repairdata (casekey,userid, cor, repairby, repairdate, repairwork, repairmasternum, repairmasterdate)
VALUES ('$casekey','$userid', '$causeOfRepair', '$repairBy', '$repairDate', '$repairWorkInfo', '$repairMasterNum','$repairMasterDate')";
        if ($dbconnect->query($sql) === TRUE) {
            $_SESSION['suc_msg'] = "Data submitted successfully.";
            $_SESSION['suc_msg_type'] = "Success";
            echo "True";
            header('location:selectCaseType.php');
        } else {
            echo "Issue  in query sql";

            $_SESSION['suc_msg'] = "Something went wrong, Please try again.";
            $_SESSION['suc_msg_type'] = "Error";
            echo "$sql";
        }
    }
}
else {
        echo "Case key is null";
    }
header('location:selectCaseType.php');