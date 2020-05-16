<?php
require '../../controllers/superadmin/addadminController.php';
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
    <script src="valid.js"></script>
  </head>
  <body>
    <?php include "navbar.php"; ?>
    
    <section id="admin-menu">
    <?php include "superadminmenu.php"; ?>
      <div class="split-right">
        <div>
          <div class="login p-l-55 p-r-55 p-t-65 p-b-50">
            <form action="" name="RegForm" class="login-form" method="post" onsubmit="return validationn()">
              <span class="login-form-title">Add Admin</span>

              <input name="fname" class="login-input" type="text" placeholder="First Name" value="<?php echo $fname; ?>"/>
            
          <span style="color:red"><?php echo $err_fname;?></span>
              <br>
              <input name="lname" class="login-input" type="text" placeholder="Last Name" value="<?php echo $lname; ?>" />
              <br />
              <span style="color:red"><?php echo $err_lname;?></span>
              <input name="uname" class="login-input" type="text" placeholder="User Name" value="<?php echo $uname;?>"/>
              <span style="color:red"><?php echo $err_uname;?></span>
              <br />
              <input
                name="email"
                class="login-input"
                type="email"
                placeholder="Email Address"
                value="<?php echo $email;?>"
              />
              <span style="color:red"><?php echo $err_email;?></span>
              <br />
              <input
                name="phone"
                class="login-input"
                type="text"
                placeholder="Phone Number"
                value="<?php echo $phone; ?>"
              />
              <span style="color:red"><?php echo $err_phone;?></span>
              <br />
              <table>
            <tr>
            <td><input class="male-input" type="radio" name="gender" <?php if (isset($gender) && $gender=="Male") echo "checked";?> value="Male">
            <span class="gender-input">Male</span> 
            </td>
            <td><input class="female-input" type="radio" name="gender" <?php if (isset($gender) && $gender=="Female") echo "checked";?> value="Female">
            <span class="gender-input">Female</span> <br>
            </td>
            </tr>
            <tr>
            <td><span style="color:red"><?php echo $err_gender;?></span></td>
            </tr>
            </table>
              <span class="input">Date of Birth</span>
              <input class="login-input" type="date" name="birthdate" value="<?php echo $birthdate; ?>" />
              <span style="color:red"><?php echo $err_birthdate;?></span>
              <br />
              <input
                name="pass"
                class="login-input"
                type="password"
                placeholder="Password"
                value="<?php echo $pass; ?>"
              />
              <span style="color:red"><?php echo $err_pass;?></span>
              <br />
              <input
                name="cpass"
                class="login-input"
                type="password"
                placeholder="Confirm Password"
                value="<?php echo $cpass; ?>"
              />
              <span style="color:red"><?php echo $err_cpass;?></span>
             <span style="color:red"><?php echo $wrong_pass;?></span>
              <br />
              <input type="submit" class="login-form-btn" name="submit" value="Add Admin">
            </form>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
