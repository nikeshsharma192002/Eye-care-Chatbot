<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
    
    </title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="wrapper">
        
          <h1>Register</h1>
          <div class="input-box">
            <form method="post" action="register.php">
              <?php include('errors.php'); ?>
            <input type="text" name="username" placeholder="Username" value="<?php echo $username; ?>" />
            <!-- <i class="bx bxs-user"></i> -->
          </div>
          <div class="input-box">
            <input type="email" name="email" placeholder="email" value="<?php echo $email; ?>"/>
            <!-- <i class="bx bxs-user"></i> -->
          </div>
          <div class="input-box">
            <input type="password" name="password_1" placeholder="Password" />
            <!-- <i class="bx bxs-lock-alt"></i> -->
          </div>
          <div class="input-box">
            <input type="password" name="confirm_2" placeholder="Confirm Password"/>
            <!-- <i class="bx bxs-lock-alt"></i> -->
          </div>
          
          <button type="submit" class="btn" name="reg_user">Register</button>
          <div class="register-link">
            <p>I already have an account? <a href="index.php">Login</a></p>
          </div>
        </form>
      </div>
      
</body>
</html>