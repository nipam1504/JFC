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
<script type="text/javascript" language="javascript" src="https://cdn.jsdelivr.net/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
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
						<form name="myform" id="myForm" method="post" action="check-login.php" >
							<input type="text"  name="user_name" placeholder="User name" required="" >
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
<script>
function warning_modal() {
    BootstrapDialog.alert({
        title: 'WARNING',
        message: 'Invalid Username or Password!',
        type: BootstrapDialog.TYPE_WARNING, // <-- Default value is BootstrapDialog.TYPE_PRIMARY
        closable: true, // <-- Default value is false
        draggable: false, // <-- Default value is false
        buttonLabel: 'OK', // <-- Default value is 'OK',

    });
   }

    $(document).ready(function () {
        $('#myForm').validate({
            errorClass: "text-danger",
            errorElement: "div",
            rules: {
                user_name: {
                    required:true
                },
                user_password: "required"
            },
            messages: {
                user_name: {
                    required:"Please enter user name."
                },
                user_password: "Please enter password."
            },
        submitHandler: function () {
            $('#myForm').submit();
        }
    })
 });

</script>
	
</body>
</html>