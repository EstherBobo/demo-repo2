<?php include('connection.php') ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Register here</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <div class="header">
      Create Account
    </div>
    <div class="container">

      <form method="post" action="register.php" >
        <?php include('errors.php'); ?>
        <div class="form_group">
          <label>First Name</label>
            <input type="text" name="fname">
        </div>
        <div class="form_group">
          <label>Last Name</label>
            <input type="text" name="lname">
        </div>
        <div class="form_group">
          <label>Email</label>
            <input type="text" name="email" value="<?php echo $email; ?>">
        </div>
        <div class="form_group">
          <label>Password</label>
            <input type="password" name="pass1">
        </div>
        <div class="form_group">
          <label>Confirm Password</label>
            <input type="password" name="pass2">
        </div>
        <div class="form_group">
          <button type="submit" class="btn" name="reg_user">Register</button>

        </div>
        <p>Already a member? <a href="login.php">Sign in</p>

      </form>

    </div>

  </body>
</html>
