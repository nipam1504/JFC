<?php
require 'db-config.php';
$searchText =$_REQUEST['searchText'];
 $sql = "select * from user u, useraddress ua, casedata c WHERE c.userid=u.userid and c.case_key='$searchText'";
$result = $dbconnect->query($sql);
while($row = $result->fetch_assoc()) {
	echo  json_encode($row);exit;	
}

?>