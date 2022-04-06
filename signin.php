<?php
    require('database.php');
    require('functions.php');
    session_start();
    if(isset($_SESSION["login_email"])) {
        header("Location: index.php");
    }
    // When form submitted, check and create user session.
    if ($_POST) {
        $email = stripslashes($_POST['email']);    // removes backslashes
        $email = mysqli_real_escape_string($conn, $email);
        $password = stripslashes($_POST['password']);
        $password = mysqli_real_escape_string($conn, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE email='$email'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($conn, $query) or die(mysql_error());
		$data  = mysqli_fetch_assoc($result);
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
			print_r($data['roal']);
			if ($data['roal'] == 1) {
				echo '  admin';
				$_SESSION['admin'] = $email;
				header("Location: admin/index.php");
			}else{
				echo ' not admin';
				$_SESSION['login_email'] = $email;
				header("Location: index.php");
			}
        } else {
			header('Location: signin.php?code=400&message=Incorrect email/password.');
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
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<!-- partial:index.partial.html -->
<?php 
        if(!empty($_GET['message'])) {
            $code = $_GET['code'];
            
            if($code == 200){
                echo '<div class="alert alert-success alert-dismissible" id="msg">
                '.$_GET['message'].'</div>';
            }else{
                echo '<div class="alert alert-danger alert-dismissible" id="msg">
             '.$_GET['message'].'</div>';
            }
        }
        ?>
<div class="container">

	<div class="screen">
		<div class="screen__content">
			<form class="login" method="post">
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" class="login__input" name="email" placeholder=" Email">
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="password" class="login__input" name="password" placeholder="Password">
				</div>
				<button class="button login__submit">
					<span class="button__text">Sign in</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>
				<div style="margin-top: 20px;">
					<a href="signup.php" style=" color: black;  text-decoration: none;">Sign UP</a>
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
