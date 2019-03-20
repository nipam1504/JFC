<?php
session_start();
require 'db-config.php';

$aidRecommand = $_REQUEST['aidRecommand'];
$masterNumber = $_REQUEST['masterNumber'];
$masterDate = $_REQUEST['masterDate'];
$cuserid =$_SESSION['cuserid'];
$today = date('Y-m-d');
$caseKey = $_SESSION['case_key'];
$idref = $_REQUEST['idproofnum'];

if ($aidRecommand == 'Sewing_Machine'){
    $approveby = $_REQUEST['approveby'];
    $sql = "INSERT INTO casedata (userid, aidrecom, createdat, masternum, idref, masterdate, case_key, approveby )
VALUES ('$cuserid','$aidRecommand', '$today','$masterNumber', '$idref', '$masterDate', '$caseKey','$approveby' )";
//echo $sql;
} else{
    $lateral = $_REQUEST['lateral'];
    $side = $_REQUEST['side'];
    $cause = $_REQUEST['cause'];
    $subCause = $_REQUEST['subCause'];
    $measurement = $_REQUEST['measurement'];
    $measureDate =$_REQUEST['measureDate'];
    $issueDate = $_REQUEST['issueDate'];
    $madeBy = $_REQUEST['madeBy'];
    $prNumber =$_REQUEST['prNumber'];
    $approveby =  $_SESSION['sess_id'];
    $sql = "INSERT INTO casedata (userid,aidrecom, createdat,lateral, side, usercod, userscod, measureby, measuredate, issuedate, madeby,idref, masternum, masterdate, orprnum,case_key ,approveby)
VALUES ('$cuserid','$aidRecommand', '$today', '$lateral', '$side', '$cause', '$subCause', '$measurement', '$measureDate', '$issueDate', '$madeBy','$idref' ,'$masterNumber', '$masterDate' , '$prNumber','$caseKey','$approveby')";
    //echo $sql;
}


if ($dbconnect->query($sql) === TRUE) {
    $_SESSION['suc_msg'] = "Data submitted successfully.";
    $_SESSION['suc_msg_type'] = "Success";
} else {
    $_SESSION['suc_msg'] = "Something went wrong, Please try again.";
    $_SESSION['suc_msg_type'] = "Error";

}

header('location:selectCaseType.php');
