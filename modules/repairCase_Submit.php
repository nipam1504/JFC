<?php
session_start();
require 'db-config.php';
/*$firstName = $_REQUEST['first_name'];
$lastName = $_REQUEST['last_name'];
$gender = $_REQUEST['gender'];
$dateofbirth = $_REQUEST['dob'];
$country = $_REQUEST['country'];
$phone1 = $_REQUEST['phone1'];
$phone2 = $_REQUEST['phone1'];
$caste = $_REQUEST['caste'];
$gsi = $_REQUEST['GSI'];
$bpl = $_REQUEST['BPL'];
$case_key= $_REQUEST['case_key'];
echo "('$firstName', '$lastName', '$gender', '$dateofbirth', '$phone1' , '$phone2', '$caste')";

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

$casekey=$_REQUEST["case_key"];
$userid=$_REQUEST["userid"];
$causeOfRepair=$_REQUEST["repairCause"];
$repairBy=$_REQUEST["repairBy"];
$repairDate=$_REQUEST["repairDate"];
$repairWorkInfo=$_REQUEST["repairWorkInfo"];
$repairMasterNum=$_REQUEST["repairMasterNumber"];
$repairMasterDate=$_REQUEST["repairMasterDate"];
$repairIDDOc   =$_REQUEST["proofyn"];

echo "" ;
$sql = "INSERT INTO repairdata (casekey,userid, cor, repairby, repairdate, repairwork, repairmasternum, repairmasterdate)
VALUES ('$casekey','$userid', '$causeOfRepair', '$repairBy', '$repairDate', '$repairWorkInfo', '$repairMasterNum','$repairMasterDate')";
if ($dbconnect->query($sql) === TRUE) {
    $_SESSION['suc_msg'] = "Data submitted successfully.";
    $_SESSION['suc_msg_type'] = "Success";
    echo "True" ;
} else {
    echo "Issue  in query sql";

    $_SESSION['suc_msg'] = "Something went wrong, Please try again.";
    $_SESSION['suc_msg_type'] = "Error";
    echo "$sql" ;

}