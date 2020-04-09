<?php
require_once '../../controllers/superadmin/updateadminController.php';
$uid = $_GET["id"];
$admin=getAdmin($uid);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Super Admin</title>
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
              <span class="login-form-title">Update Admin</span>
              <input class="login-input" name="fname" type="text" placeholder="First Name" value="<?php echo $admin["fname"]?>" />
              <span style="color:red"><?php echo $err_fname;?></span>
              <br />
              <input class="login-input" name="lname" type="text" placeholder="Last Name" value="<?php echo $admin["lname"]?>" />
              <span style="color:red"><?php echo $err_lname;?></span>
              <br>
              <input class="login-input" name="uname" type="text" placeholder="User Name" value="<?php echo $admin["uname"]?>" />
              <span style="color:red"><?php echo $err_uname;?></span>
              <br />
              <input
                class="login-input"
                name="email"
                type="email"
                placeholder="Email Address"
                value="<?php echo $admin["email"]?>"
              />
              <span style="color:red"><?php echo $err_email;?></span>
              <br />
              <input
                class="login-input"
                name="phone"
                type="text"
                placeholder="Phone Number"
                value="<?php echo $admin["phone"]?>"
              />
              <span style="color:red"><?php echo $err_phone;?></span>
              <br />
              <input type="hidden" name="id" value="<?php echo $admin["userid"]?>" >
              <input type="submit"class="login-form-btn" name="update" value="Update Admin" >
            </form>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
