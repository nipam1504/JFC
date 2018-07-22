<!DOCTYPE HTML>
<html>
<head>
<title>BMVSS | Jaipur Foot Center | Artificial Limbs</title>
<!-- Custom Theme files -->
<link href="assets/style/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 

<!-- JQUERY -->
<script type="text/javascript" language="javascript" src="assets/media/js/jquery.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
<!-- Optional theme -->
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap-theme.min.css">
<!-- Latest compiled and minified JavaScript -->
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<!-- Bootstrap Dialog -->
<script src="assets/bootstrap/js/bootstrap-dialog.js"></script>
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap-dialog.css">
		

<script src="assets/js/easyResponsiveTabs.js" type="text/javascript"></script>
		    <script type="text/javascript">
			    $(document).ready(function () {
			        $('#horizontalTab').easyResponsiveTabs({
			            type: 'default', //Types: default, vertical, accordion           
			            width: 'auto', //auto or any width like 600px
			            fit: true   // 100% fit in a container
			        });
			    });
				
</script>
    <script>
        function validateform(){
            var name=document.myform.user_name.value;
            var password=document.myform.user_password.value;
            var test=document.my

            if (name==null || name==""){
                alert("User name can't be blank");
                return false;
            }else if(password==null || password="" || password.length<5){
                alert("Password can't be blank or less than 5 character");
                return false;
            }
        }
    </script>

    <!-- Bootstrap modal configuration -->
<style type='text/css'>
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
	<div class="head">
		<div class="logo">
			<div class="logo-top">
				<h1>BMVSS</h1>
			</div>
            
			<div class="logo-bottom">
            	<label class="label"><p>Jaipur Foot Center</p></label>
              
			</div>
		</div>		
		<div class="login">
			<div class="sap_tabs">
				<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
				
					<?php
					/* handle error ==>> open modal*/
						if (isset($_GET['error'])) : ?>
						 <script type="text/javascript">
							$(window).load(function(){
								warning_modal();
							});
						</script>						
					<?php endif;?>
					
					<div class="login-top">
						<!-- send post data to  check-login.php-->
						<form name="myform" method="post" action="check-login.php" onsubmit="return validateform()">
							<input type="text" class="email" name="user_name" placeholder="Username" required="" >
							<input type="password" class="password" name="user_password" placeholder="Password" required="" >
									
							<div class="login-bottom login-bottom1" align="center">
								<div class="submit">
									<input type="submit" name="submit" id="submit" value=" LOGIN "/>
								</div>
								<div class="clear"></div>
							</div>
						</form>									
					</div>
                    
                   
				</div>
			</div>	
		</div>		
		<div class="clear"></div>
	</div>

	<div style="text-align:center; margin-top:10px;">

<script>
function warning_modal(){
	BootstrapDialog.alert({
            title: 'WARNING',
            message: 'Invalid Username or Password!',
            type: BootstrapDialog.TYPE_WARNING, // <-- Default value is BootstrapDialog.TYPE_PRIMARY
            closable: true, // <-- Default value is false
            draggable: false, // <-- Default value is false
            buttonLabel: 'OK', // <-- Default value is 'OK',
           
        });
}

</script>
	
</body>
</html>