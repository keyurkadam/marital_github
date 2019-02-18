<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Gajanand Sarees</title>
<?php 
include_once('head_file.php');
?>
</head>
<body>
<!-- header_top -->
<?php 
include_once('header_top.php');
?>
<!-- header -->
<div class="header_bg">
<?php 
include_once('header.php');
?>
<!-- Slider div starts here -->
<?php 
//include_once('slider_view.php');
?>
<!-- Slider div ends here -->
</div>


<!-- header -->
<!-- content -->
<div class="container">
<div class="main">
	<!-- start registration -->
	<div class="registration">
		<div class="registration_left">
		<h2>new user? <span> create an account </span></h2>
		<!-- [if IE] 
		    < link rel='stylesheet' type='text/css' href='ie.css'/>  
		 [endif] -->  
		  
		<!-- [if lt IE 7]>  
		    < link rel='stylesheet' type='text/css' href='ie6.css'/>  
		<! [endif] -->  
		<script>
			(function() {
		
			// Create input element for testing
			var inputs = document.createElement('input');
			
			// Create the supports object
			var supports = {};
			
			supports.autofocus   = 'autofocus' in inputs;
			supports.required    = 'required' in inputs;
			supports.placeholder = 'placeholder' in inputs;
		
			// Fallback for autofocus attribute
			if(!supports.autofocus) {
				
			}
			
			// Fallback for required attribute
			if(!supports.required) {
				
			}
		
			// Fallback for placeholder attribute
			if(!supports.placeholder) {
				
			}
			
			// Change text inside send button on submit
			var send = document.getElementById('register-submit');
			if(send) {
				send.onclick = function () {
					this.innerHTML = '...Sending';
				}
			}
		
		})();
		</script>
		 <div class="registration_form">
		 <!-- Form -->
		 	<?php 
		 	if(isset($msg))
		 	{
		 		echo $msg;
		 	}
		 	?>
			<form id="registration_form" action="<?php echo base_url(); ?>user/register/create" method="post">
				<div>
					<label>
						<input placeholder="name:" type="text" tabindex="1" id="txt_name" name="txt_name" required autofocus>
					</label>
				</div>

				<div>
					<label>
						<input placeholder="mobile:" type="text" tabindex="2" id="txt_mobile" name="txt_mobile"  required>
					</label>
				</div>

				<div>
					<label>
						<input placeholder="gst no:" type="text" tabindex="3"  id="txt_gst_no" name="txt_gst_no"    required>
					</label>
				</div>
				
				<div>
					<label>
						<input placeholder="email address:" type="email"  id="txt_email" name="txt_email"   tabindex="4" required>
					</label>
				</div>
				<div>
					<label>
						<input placeholder="password" type="password" tabindex="5"  id="txt_pwd" name="txt_pwd"  required>
					</label>
				</div>						
				<div>
					<label>
						<input placeholder="retype password" type="password" tabindex="6"  id="txt_cpwd" name="txt_cpwd"  required>
					</label>
				</div>	

				<div>
					<label>
						<input placeholder="Address" type="text" tabindex="7" style="height:100px"  id="txt_address" name="txt_address"  required>
					</label>
				</div>	
				<div>
					<input type="submit" value="create an account" id="register-submit" name="btn_submit">
				</div>
				<!--<div class="sky-form">
					<label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>i agree terms of Vimla Prints Pvt. Ltd. &nbsp;<a class="terms" href="#"> terms of service</a> </label>
				</div>-->
			</form>
			<!-- /Form -->
		</div>
	</div>
	<!--<div class="registration_left">
		<h2>existing user</h2>
		 <div class="registration_form">
			<form id="registration_form" action="contact.php" method="post">
				<div>
					<label>
						<input placeholder="email:" type="email" tabindex="3" required>
					</label>
				</div>
				<div>
					<label>
						<input placeholder="password" type="password" tabindex="4" required>
					</label>
				</div>						
				<div>
					<input type="submit" value="sign in" id="register-submit">
				</div>
				<div class="forget">
					<a href="#">forgot your password</a>
				</div>
			</form>
			</div>
	</div>-->
	<div class="clearfix"></div>
	</div>
	<!-- end registration -->
</div>
</div>

<?php 
include_once('footer.php');
?>
</body>
</html>

