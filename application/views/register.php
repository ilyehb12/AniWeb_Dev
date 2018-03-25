<?php include('server.php') ?>
	<body>
		<div class="loginBox">
  <img src="<?php echo base_url(); ?>public/SRC/prompicleft.png" class="user">
      <h2>SignUp</h2><br>
      <h4>Aniweb</h4>
  <form method="post" action="register">
    <?php include('errors.php'); ?>
    <div>
  	  <p>Username</p>
  	  <input type="text" name="username" placeholder="Enter Username" value="<?php echo $username; ?>">
  	</div>
  	<div>
  	  <p>Email</p>
  	  <input type="email" name="email" placeholder="Enter Email" value="<?php echo $email; ?>">
  	</div>
  	<div>
  	  <p>Password</p>
  	  <input type="password" name="password_1" placeholder="Enter Password">
  	</div>
  	<div>
  	  <p>Confirm password</p>
  	  <input type="password" name="password_2" placeholder="Confirm Password">
  	</div>
  	<div>
  	  <input type="submit" class="btn" name="reg_user" value="Register">
  	</div>
    <p>
      Already a member? <a href="loadmain">SignIn</a>
    </p>
  </form>
</div>
	</body>
