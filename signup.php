<?php
    require('database.php');
    require('functions.php');
	session_start();
    if(isset($_SESSION["login_email"])) {
        header("Location: index.php");
    }
	if ($_POST) {
		// When form submitted, insert values into the database.
		if (!empty($_POST['name']) & !empty($_POST['email'])& !empty($_POST['phone'])& !empty($_POST['password']) ) {
			// removes backslashes
			$get_current = get_current();
			$name = stripslashes($_REQUEST['name']);
			$phone = stripslashes($_REQUEST['phone']);
			//escapes special characters in a string
			$name = mysqli_real_escape_string($conn, $name);
			$email    = stripslashes($_REQUEST['email']);
			$email    = mysqli_real_escape_string($conn, $email);
			$password = stripslashes($_REQUEST['password']);
			$password = mysqli_real_escape_string($conn, $password);
			$create_datetime = date("Y-m-d H:i:s");
			$query    = "INSERT into `users` (name, password, email,phone,roal, created_at ,updated_at)
						VALUES ('$name', '" . md5($password) . "', '$email', '$phone','2', '$get_current', '$get_current')";
			$result   = mysqli_query($conn, $query);
			// print_r($query );
			// exit;
			if ($result) {
				header('Location: signin.php?code=200&message=You are successfully registered .');
			} 
		} else{
			echo '<div class="alert alert-danger alert-dismissible" id="msg">
			Please Enter Valid Data</div>';
		}
	}
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>..</title>
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/all.css'>
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css'>
<link rel="stylesheet" href="assets/custom/login_style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">
	<div class="screen">
		<div class="screen__content">
			<form class="signup" method="post">
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" class="login__input" required name="name"  placeholder="Name">
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="email" class="login__input" required name="email" placeholder="Email">
				</div>

				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="number" class="login__input" required name="phone" placeholder="phone">
				</div>

				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="password" class="login__input" required name="password" placeholder="Password">
				</div>
				<button class="button login__submit">
					<span class="button__text">Sign up</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>	
				<div style="margin-top: 20px;">
					<a href="signin.php" style=" color: black;  text-decoration: none;">Sign in</a>
				</div>					
			</form>
			
		</div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>		
	</div>
</div>
<!-- partial -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
	setTimeout(function () {
	  $("#msg").fadeOut(3000);
  }, 3000); // <-- time in milliseconds

</script>
</body>
</html>