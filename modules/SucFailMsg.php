<?php
session_start();
//print_r($_SESSION);
if(isset($_SESSION['suc_msg']) && $_SESSION['suc_msg']!=''){?>
    <?php
    if(isset($_SESSION['suc_msg_type']) && $_SESSION['suc_msg_type']=='Success'){?>

    <div class="alert alert-success" role="alert" id="success_message" >Success <i class="glyphicon glyphicon-thumbs-up"></i> <?php echo $_SESSION['suc_msg'];?></div>
<?php }else{?>
    <div class="alert alert-danger display-hide" >
        <button class="close" data-close="alert"></button>
        <?php echo $_SESSION['suc_msg'];?>
    </div>

<?php } }

$_SESSION['suc_msg'] = "";
$_SESSION['suc_msg_type'] = "";

?>

