
<body class="body">
  
<div class="Box">
  <img src="<?php echo base_url(); ?>public/SRC/Ani.png" class="user">
      <h2>AniWeb</h2><br>
      <h4>SignIn</h4>
  <form method="post" action="login">

    <div>
      <p>Username</p>
      <input type="text" name="username" placeholder="Enter Username">
    </div>
    <div>
      <p>Password</p>
      <input type="password" name="password" placeholder="Enter Password">
    </div>
    <div class="signinbox">
      <input type="submit" name="login_user" value="SignIn">
    </div>
    <p class="registerlink">
      Not yet a member? <a href="register.php">Register</a>
    </p>
  </form>
</div>
<div class="CRtile">
                <P class="crpara">AniWeb. Copyrights and trademarks for the anime, and other promotional materials are held by their respective owners and their use is allowed under the fair use clause of the Copyright Law.</P>
        </div>

</body>