
<?php
require_once '../../controllers/user/uRegistrationControllers.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register Here</title>
    <link rel="stylesheet" href="css/registrtion.css" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat&display=swap"
      rel="stylesheet"
    />
    <script src="registrationValid.js"></script>
  </head>
  <body>
    <div class="">
      <div class="register p-l-55 p-r-55 p-t-65 p-b-50">
        <form action="" name="RegForm" class="register-form" method="post" onsubmit="return validationn()">
          <span class="register-form-title">Register Here</span>
          <input
            class="register-input"
            type="text"
            name="fname"
            placeholder="First Name"
            value="<?php echo $fname; ?>"
          />
          <br />
          <span style="color:red"><?php echo $err_fname;?></span>

          <input
            class="register-input"
            type="text"
            name="lname"
            placeholder="Last Name"
            value="<?php echo $lname; ?>"
          /><br />
          <span style="color:red"><?php echo $err_lname;?></span>
          <input class="register-input" type="text" name="uname" placeholder="Username" value="<?php echo $uname;?>"><br>
            <span style="color:red"><?php echo $err_uname;?></span>

          <input
            class="register-input"
            type="email"
            name="email"
            placeholder="Email Address"
            value="<?php echo $email;?>"
          />
          <br />
          <span style="color:red"><?php echo $err_email?></span>

          <input
            class="register-input"
            type="text"
            name="phone"
            placeholder="Phone Number"
            value="<?php echo $phone; ?>"
          />
          <br />
          <span style="color:red"><?php echo $err_phone;?></span>
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
          <input
            class="register-input"
            type="date"
            name="birthdate"
            placeholder="Date Of Birth"
            value="<?php echo $birthdate; ?>"
          />
          <br />
          <span style="color:red"><?php echo $err_birthdate;?></span>

          <input
            class="register-input"
            type="password"
            name="pass"
            placeholder="Password"
            value="<?php echo $pass; ?>"
          />
          <span style="color:red"><?php echo $err_pass;?></span>

          <br />
          <input
            class="register-input"
            type="password"
            name="cpass"
            placeholder="Confirm Password"
            value="<?php echo $cpass; ?>"
          />
          <br />
          <span style="color:red"><?php echo $err_cpass;?></span>
            <span style="color:red"><?php echo $wrong_pass;?></span>
          <input class="register-form-btn" type="submit" name="submit" value="Sign up">
        </form>
      </div>
    </div>
  </body>
</html>
