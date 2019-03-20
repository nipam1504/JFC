<?php
require 'db-config.php';

$query = "select * from user u, useraddress ua, casedata ca WHERE u.userid=ua.userid AND ua.casekey=ca.case_key";
$result = $dbconnect->query($query);

//print_r($campArray);
?>

<!DOCTYPE HTML>
<html>
<head>
<title>BMVSS | Jaipur Foot Center | Artificial Limbs</title>
<!-- Custom Theme files -->
<link href="../assets/style/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 

<!-- JQUERY -->
<script type="text/javascript" language="javascript" src="../assets/media/js/jquery.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
<!-- Optional theme -->
<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap-theme.min.css">
<!-- Latest compiled and minified JavaScript -->
<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
<!-- Bootstrap Dialog -->
<script src="../assets/bootstrap/js/bootstrap-dialog.js"></script>
<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap-dialog.css">
<link rel='stylesheet prefetch' href="../assets/css/custom.css">		

<script src="../assets/js/easyResponsiveTabs.js" type="text/javascript"></script>
		    <script type="text/javascript">
			    $(document).ready(function () {
			        $('#horizontalTab').easyResponsiveTabs({
			            type: 'default', //Types: default, vertical, accordion           
			            width: 'auto', //auto or any width like 600px
			            fit: true   // 100% fit in a container
			        });
			    });
				
</script>	


<!-- Bootstrap modal configuration -->
<style type='text/css'>
body{
	background-image: none!important;
} 

body.modal-open .modal {
    display: flex !important;
    height: 80%;
} 

body.modal-open .modal .modal-dialog {
    margin: auto;
}
</style>


</head>
<body>
<div class="page-container">
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <!-- BEGIN PAGE HEAD-->
        <div class="page-head">
            <div class="container">
                <!-- BEGIN PAGE TITLE -->
                <!-- END PAGE TITLE -->
            </div>
        </div>
        <!-- END PAGE HEAD-->
        <!-- BEGIN PAGE CONTENT BODY -->
            <div class="page-content">
                <div class="container">
                    <!-- BEGIN PAGE BREADCRUMBS -->
                    <ul class="page-breadcrumb breadcrumb">
                        <li>
                            <a href="index.php">Home</a>
                            <i class="fa fa-circle"></i>
                        </li>

                        <li>
                            <span>Reports</span>
                        </li>
                    </ul>
                <!-- END PAGE BREADCRUMBS -->
                <!-- BEGIN PAGE CONTENT INNER -->

                <div class="page-content-inner">
                    <div class="row">
                        <div class="portlet light">
                            <div class="portlet-body form">

                                <?php
                                $output = '';
    $output .= '
    <table class="table" table-bordered>
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
        echo $output;
                                        ?>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</body>
</html>