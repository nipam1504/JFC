<?php

include_once ('header.php');
$_SESSION['camp_id'] = 0;
if(isset($_REQUEST['camp']) && $_REQUEST['camp'] >0){
    $_SESSION['camp_id'] =  $_REQUEST['camp'];
}else if(($_SESSION['camp_id']) && $_SESSION['camp_id'] >0){
    $_SESSION['camp_id'] = $_SESSION['camp_id'];
}
else{
    $_SESSION['camp_id'] = 0;
}
?>
<div style="padding-top:100px; padding-right:300px; padding-left:300px; padding-bottom:50px;">
<a class="btn btn-primary btn-block" href="./../../modules/selectCaseType.php"> <span class="glyphicon glyphicon-home"></span> Base Center </a>
</div>

<div style="padding-top:10px; padding-right:300px; padding-left:300px; padding-bottom:30px;">
<a class="btn btn-primary btn-block" href="./../../modules/selectCamp.php"> <span class="glyphicon glyphicon-flag"></span> Select Camp </a>
<br>
</div>

<div style="padding-top:10px; padding-right:300px; padding-left:300px; padding-bottom:30px;">
    <a class="btn btn-primary btn-block" href="./../../modules/addMember.php"> <span class="glyphicon glyphicon-plus"></span> Add A Member </a>
    <br>
</div>

<div style="padding-top:10px; padding-right:300px; padding-left:300px; padding-bottom:30px;">
<a class="btn btn-primary btn-block" href="./../../modules/addCamp.php"> <span class="glyphicon glyphicon-plus"></span> Add Camp </a>
<br>
</div>

</body>
</html>