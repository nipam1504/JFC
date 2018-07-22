<?php
session_start();
require 'db-config.php';
//$userid = $_REQUEST['aidRecommand'];
$aidRecommand = $_REQUEST['aidRecommand'];
$lateral = $_REQUEST['lateral'];
$side = $_REQUEST['side'];
$cause = $_REQUEST['cause'];
$subCause = $_REQUEST['subCause'];
$measurement = $_REQUEST['measurement'];
$measureDate = $_REQUEST['measureDate'];
$issueDate = $_REQUEST['issueDate'];
$madeBy = $_REQUEST['madeBy'];
$masterNumber = $_REQUEST['masterNumber'];
$masterDate = $_REQUEST['masterDate'];
$prNumber = $_REQUEST['prNumber'];



$sql = "INSERT INTO casedata (aidrecom, lateral, side, usercod, userscod, measureby, measuredate, issuedate, madeby, masternum, masterdate, orprnum)
VALUES ('$aidRecommand', '$lateral', '$side', '$cause', '$subCause', '$measurement', '$measureDate', '$issueDate', '$madeBy', '$masterNumber', '$masterDate' , '$prNumber')";

if ($dbconnect->query($sql) === TRUE) {
    $_SESSION['suc_msg'] = "Data submitted successfully.";
    $_SESSION['suc_msg_type'] = "Success";
} else {
    $_SESSION['suc_msg'] = "Something went wrong, Please try again.";
    $_SESSION['suc_msg_type'] = "Error";

}
header('location:selectCaseType.php');
