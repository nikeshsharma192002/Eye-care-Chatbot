<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Eyecare-ChatBot</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="wrapper">
        <h1>Login</h1>
        <div class="input-box">
          <form method="post" action="index.php">
            <?php include('errors.php'); ?>
          <input type="text" id="username" placeholder="Username" name="username" required />
          <!-- <i class="bx bxs-user"></i> -->
        </div>
        <div class="input-box">
          <input type="password" id="password" placeholder="Password" name="password" required />
          <!-- <i class="bx bxs-lock-alt"></i> -->
        </div>
        <div class="remember-forgot">
          <label><input type="checkbox" />Remember me</label>
          
        </div>
        <button type="submit" class="btn" name="login_user">Login</button>
        <div class="register-link">
          <p>Don't have an account? <a href="register.php">Register</a></p>
        </div>
      </form>
    </div>
    
  </body>
</html>
