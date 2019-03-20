<?php
/**
 * Created by PhpStorm.
 * User: Nipam
 * Date: 20-03-2019
 * Time: 15:03
 */
require 'db-config.php';
$output = '';
    $query = "select * from user u, useraddress ua, casedata ca WHERE u.userid=ua.userid AND ua.casekey=ca.case_key";
    $result = $dbconnect->query($query);
    if(mysqli_num_rows($result) > 0)
    {
        $output .= '
   <table class="table" bordered="1">  
     <tr>
       <th>BMVSS Case ID</th>  
       <th>Name</th>  
       <th>Address</th>
       <th>Date of Birth</th>
       <th>Gender</th>
       <th>Phone1</th>
       <th>Phone2</th>
       <th>Caste</th>
       <th>Village</th>
       <th>State</th>
       <th>City</th>  
       <th>Zip Code</th>
       <th>Country</th>
       <th>GSI</th>
       <th>BPL</th>
       <th>Aid Recommended</th>
       <th>Lateral</th>
       <th>Side</th>
       <th>Cause</th>
       <th>Sub-Cause</th>
       <th>Measure by</th>
       <th>Measure Date</th>
       <th>Issue Date</th>
       <th>Made by</th>
       <th>Master Number</th>
       <th>OR/PR Number</th>
       <th>Identity Reference</th>
       <th>Camp Name</th>
     </tr>
  ';
        while($row = mysqli_fetch_array($result))
        {
            $output .= '
    <tr>
       <td>'.$row["casekey"].'</td>  
       <td>'.$row["firstname"].' '.$row["lastname"].'</td>  
       <td>'.$row["address1"].' '.$row["address2"].' '.$row["address3"].'</td>  
       <td>'.$row["userdob"].'</td>
       <td>'.$row["gender"].'</td>
       <td>'.$row["userphone1"].'</td>
       <td>'.$row["userphone2"].'</td>
       <td>'.$row["caste"].'</td>
       <td>'.$row["village"].'</td>
       <td>'.$row["state"].'</td>
       <td>'.$row["city"].'</td>  
       <td>'.$row["zip"].'</td>
       <td>'.$row["country"].'</td>
       <td>'.$row["gsi"].'</td>
       <td>'.$row["bpl"].'</td>
       <td>'.$row["aidrecom"].'</td>
       <td>'.$row["lateral"].'</td>
       <td>'.$row["side"].'</td>
       <td>'.$row["usercod"].'</td>
       <td>'.$row["userscod"].'</td>
       <td>'.$row["measureby"].'</td>
       <td>'.$row["measuredate"].'</td>
       <td>'.$row["issuedate"].'</td>
       <td>'.$row["madeby"].'</td>
       <td>'.$row["masternum"].'</td>
       <td>'.$row["orprnum"].'</td>
       <td>'.$row["idref"].'</td>
       <td>'.$row["camp_id"].'</td>  
       
    </tr>
   ';
        }
        $output .= '</table>';
        header('Content-Type: application/xls');
        header('Content-Disposition: attachment; filename=bmvss.xls');
        echo $output;

}
?>