<?php
require '../../controllers/superadmin/changePasswordController.php';

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="css/superadmin.css" />
    
  </head>
  <body>
  <?php include "navbar.php"; ?>
    <section id="admin-menu">
    <?php include "superadminmenu.php"; ?>
      <div class="split-right">
        <div>
          <div class="login p-l-55 p-r-55 p-t-65 p-b-50">
            <form action="" class="login-form" method="post">
              <span class="login-form-title">Change Password</span>

              <input name="cpass" class="login-input" type="text" placeholder="Current Password"  value="<?php echo $cpass;?>" />
              <br>
              <span style="color:red"><?php echo $err_cpass;?></span>
            <span style="color:red"><?php echo $wrong_cpass;?></span>
              
              <input name="npass" class="login-input" type="text" placeholder="New Password" value="<?php echo $npass;?>" />
              <br />
            <span style="color:red"><?php echo $err_npass; ?>  </span>
              
              <input name="cfpass" class="login-input" type="text" placeholder="Confirm Password" value="<?php echo $cfpass; ?>" />
              <br />
            <span style="color:red"><?php echo $err_cfpass; ?> </span>
            <span style="color:red"><?php echo $wrong_pass; ?> </span>
              
              <input class="login-form-btn" type="submit" name="change" value="Change">
            </form>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
