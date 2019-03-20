<?php
require 'db-config.php';
$id =$_REQUEST['id'];
$sql = "Select * from district  where status = 1 and stateId = $id";
$result = $dbconnect->query($sql);
$cityArray = array();
while($row = $result->fetch_assoc()) {
array_push($cityArray, $row);	
}
//echo  json_encode($cityArray);

$HTML = '<select name="district1" class="form-control selectpicker">
                                                    <option value=" ">Please select your District</option>';
foreach($cityArray as $city){
$HTML =  $HTML . '<option value="'.$city['id'].'">'.$city['districtName'].'</option>';
}

$HTML = $HTML . '</select>';
   
echo $HTML;   
//echo $cityArray;
exit;
?>