<?php  include('config.php'); ?>
<?php  include('includes/registration_login.php'); ?>
<?php  include('includes/head_section.php'); ?>
	<title>Dekut Forum | Sign in </title>
</head>
<body>
<div class="container">
	
	<?php include( 'includes/navbar.php'); ?>
	
	<div style="width: 40%; margin: 20px auto;">
		<form method="post" action="login.php" >
			<h2>Login</h2>
			<?php include('includes/errors.php') ?>
			<input type="text" name="username" value="<?php echo $username; ?>" value="" placeholder="Username">
			<input type="password" name="password" placeholder="Password">
			<button type="submit" class="btn" name="login_btn">Login</button>
			<p>
				Not yet a member? <a href="register.php">Sign up</a>
			</p>
		</form>
	</div>
</div>

	<?php include('includes/footer.php'); ?>
