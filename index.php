<!DOCTYPE html>
<html lang="en">
<head>
  <title>Crud tutorial</title>
  	<?php  include 'links.php' ?>
  	<?php include 'css\style.css' ?>
</head>
<body>
	<div class="container register">
		<div class="row">
			<div class="col-md-3 register-left">
				<img src="" alt=""/>
				<h3>Welcome</h3>
				<p>Please fill all the details carefully. This form can change your life.</p>
				<a href="home.php">Check Form</a><br/>
			</div>
			<div class="col-md-9 register-right">

				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
						<h3 class="register-heading" >Apply for web developer post</h3>
						<form action="" method="POST">
						<div class="row register-form">

							<div class="col-md-6">

								<div class="form-group">
									<input type="text" class="form-control"
									placeholder="enter your name*" name="user" value="" required/>
								</div>
								<div class="form-group">
									<input type="tel" class="form-control" placeholder="mobile number *" name="mobile" value="" required/>
								</div>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Any references *" name="refer" value="" required/>
								</div>

							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" class="form-control"
									placeholder="enter your qualification*" name="degree" value="" required/>
								</div>
								<div class="form-group">
									<input type="text" class="form-control"
									placeholder="enter your email id*" name="email" value="" required/>
								</div>
								<div class="form-group">
									<input type="text" class="form-control"
									placeholder="WebDeveloper post" name="jobprofile" value="Web Developer" />
								</div>
								 <button type="submit" class="registerbtn" name="submit" value="register"/>Register</button>
 								 </div>

							</div>
						</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>

<html lang="en">
  <head>
    <meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="YOUR_CLIENT_ID.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
  </head>
  <body>
    <div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark"></div>
    <script>
      function onSignIn(googleUser) {
        // Useful data for your client-side scripts:
        var profile = googleUser.getBasicProfile();
        console.log("ID: " + profile.getId()); // Don't send this directly to your server!
        console.log('Full Name: ' + profile.getName());
        console.log('Given Name: ' + profile.getGivenName());
        console.log('Family Name: ' + profile.getFamilyName());
        console.log("Image URL: " + profile.getImageUrl());
        console.log("Email: " + profile.getEmail());

        // The ID token you need to pass to your backend:
        var id_token = googleUser.getAuthResponse().id_token;
        console.log("ID Token: " + id_token);
      }
    </script>
  </body>
</html>

<?php

include 'connection.php';

if(isset($_POST['submit'])){
 
	$name=$_POST['user'];
	$degree=$_POST['degree'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];
	$refer=$_POST['refer'];
	$jobprofile=$_POST['jobprofile'];

	$insertquery= " insert into registration_form(name,degree,mobile,email,refer,jobpost)values('$name','$degree','$mobile','$email','$refer','$jobprofile') ";

	$res = mysqli_query($con,$insertquery);

	if($res){
	?>
	<script>
		alert('data inserted properly');
	</script>
	<?php
	}else{
	?>
	<script>
		alert('data not inserted properly');
	</script>
	<?php
	}
}

?>
