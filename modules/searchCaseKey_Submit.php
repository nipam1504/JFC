<?php
session_start();
require 'db-config.php';
$memberName = $_REQUEST['member_name'];


$sql = "Select u.*,casedata.* from casedata left join user u on u.userid = casedata.userid where case_key = '$searchText'";

$result = $dbconnect->query($sql);
while($row = $result->fetch_assoc()) {
    echo  json_encode($row);exit;
}
