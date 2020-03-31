<?php
require '../../controllers/user/uSettingsControllers.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Settings</title>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </head>
  <link rel="stylesheet" href="css/usettings.css" />
  <body>
  <?php
   include("navbar.php"); 
   ?>
    <section id="usettings">
      <div class="">
        <div class="login p-l-55 p-r-55 p-t-65 p-b-50">
          <form action="" class="login-form" method="post">
            <span class="login-form-title">Account Settings</span>
            <input class="login-input" type="text" name="fname" placeholder="First Name" value="<?php echo $fname; ?>" />
            <br />
            <span style="color:red"> <?php echo $err_fname; ?></span>
            <input
              class="login-input"
              type="text"
              name="lname"
              id=""
              placeholder="Last Name"
              value="<?php echo $lname; ?>"
            />
            <br />
            <span style="color:red"><?php echo $err_lname; ?></span>
            <input
              class="login-input"
              type="email"
              name="email"
              id=""
              placeholder="Email Address" 
              value="<?php echo $email; ?>"
            />
            <br />
            <span style="color:red"><?php echo $err_email; ?></span>
            <input class="login-input" type="text" name="phone" placeholder="Phone Number" value="<?php echo "0".$phone; ?>"/>
            <br />
            <span style="color:red"><?php echo $err_phone; ?></span>
            <input type="submit" class="login-form-btn" name="submit" value="Update">
          </form>
        </div>
      </div>
    </section>
  </body>
</html>
