<?php
require '../../controllers/user/uChangePasswordControllers.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Change Password</title>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </head>
  <link rel="stylesheet" href="css/uchangepassword.css" />
  <body>
  <?php
   include("navbar.php"); 
   ?>
    <section id="usettings">
      <div class="">
        <div class="login p-l-55 p-r-55 p-t-65 p-b-50">
          <form action="" class="login-form" method="post">
            <span class="login-form-title">Change Password</span>
            <input
              class="login-input"
              type="password"
              name="cpass"
              placeholder="Current Password"
              value="<?php echo $cpass;?>"
            />
            <br />
            <span style="color:red"><?php echo $err_cpass;?></span>
            <span style="color:red"><?php echo $wrong_cpass;?></span>
            
            <input
              class="login-input"
              type="password"
              name="npass"
              id=""
              placeholder="New Password"
              value="<?php echo $npass;?>"
            />
            <br />
            <span style="color:red"><?php echo $err_npass; ?>  </span>
            <input
              class="login-input"
              type="password"
              name="cfpass"
              id=""
              placeholder="Confirm New Password"
              value="<?php echo $cfpass; ?>"
            />
            <br />
            <span style="color:red"><?php echo $err_cfpass; ?> </span>
            <span style="color:red"><?php echo $wrong_pass; ?> </span>
            <input class="login-form-btn" type="submit" name="submit6" value="Change">
          </form>
        </div>
      </div>
    </section>
  </body>
</html>
