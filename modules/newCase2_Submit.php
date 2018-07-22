<?php

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
    echo '<script language="javascript">';
	echo 'alert("message successfully sent")';
	echo '</script>';
} else {
	echo '<script language="javascript">';
echo 'alert("message not sent")';
echo '</script>';
    echo "Error: " . $sql . "<br>" . $dbconnect->error;
}

header('location:selectCaseType.php');
