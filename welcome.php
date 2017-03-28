<!DOCTYPE html>
<html>
<head>
	<title>Sign In User</title>
	<!-- Compiled and minified CSS -->
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/css/materialize.min.css">

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col m12">
				<h4 class="center-align">Sign Up for Software Engineering classes by Pavan Kottapalli</h4>
			</div>
		</div>
		<?php 
			if(isset($_COOKIE["first_name"])){
				echo '<div class="row">';
				echo '<h6 class="center-align">';
				echo "Hi, ".$_COOKIE["first_name"].", you recently signed up with the email address: ".$_COOKIE["email_id"].", thank you!";
				echo '</h6>';
				echo '</div>';
			}
			else{
				echo '<div class="row">
					    <form class="col s12" action="register.php" method="POST" enctype = "multipart/form-data">
					      <div class="row">
					        <div class="input-field col s6">
					          <input id="first_name" type="text" name="first_name" class="validate">
					          <label for="first_name">First Name</label>
					        </div>
					        <div class="input-field col s6">
					          <input id="last_name" type="text" name="last_name" class="validate">
					          <label for="last_name">Last Name</label>
					        </div>
					      </div>
					      <div class="row">
					        <div class="input-field col s12">
					          <input id="email" type="email" name="email_id" class="validate">
					          <label for="email">Email</label>
					        </div>
					      </div>
					      <div class="row">
					      	<div class="col s12 center-align">
					      		<button class="btn waves-effect waves-light" type="submit" name="submit">Submit</button>
					      	</div>
					      </div> 
					    </form>
					</div>';
			}
		?>	
	</div>

	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<!-- Compiled and minified JavaScript -->
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/js/materialize.min.js"></script>
</body>
</html>

