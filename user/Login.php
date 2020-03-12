<?php
    session_start();
    require("database_connect.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat&display=swap"
      rel="stylesheet"
    />
  </head>

  <body>
  <?php
  $err_uname = '';
  $uname = '';
  $err_pass = '';
  $pass = '';
  $wrong_pass="";
  $err_invalid="";
  $has_error=false;
  if (isset($_POST['submit'])) 
  {
      if (empty($_POST['uname'])) 
      {
          $err_uname = '*Username Required';
          $has_error=true;
      } 
      else 
      {
          $uname = htmlspecialchars($_POST['uname']);
      }
      if (empty($_POST['pass'])) 
      {
          $err_pass = '*Password Required';
          $has_erro=true;
      } 
      else 
      {
          $pass = $_POST['pass'];
      }
      if(!$has_error){
        $query = "SELECT * FROM users WHERE uname='$uname' AND pass='$pass'";
			$result=get($query);
			if(mysqli_num_rows($result) > 0)
			{
				$row=mysqli_fetch_assoc($result);
				if ($row["type"]=="user") {
          $_SESSION["loggedinuser"]=$row["name"];
					
					header("Location:udashboard.php");
				}
				elseif ($row["type"]=="admin"){
					$_SESSION["loggedinuser"]=$row["name"];
					header("Location:/Mid-Project/admin/admin.html");
        }
        elseif(($row["type"]=="superadmin")){
          $_SESSION["loggedinuser"]=$row["name"];
					header("Location:/Mid-Project/superadmin/superadmin.php");
        }
			}
			else
			{
				$err_invalid="*Invalid Username Password";
			}
      }
  }
  ?>

    <div class="">
      <div class="login p-l-55 p-r-55 p-t-65 p-b-50">
        <form  method="post" class="login-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
          <span class="login-form-title">Account Login</span>
          <input class="login-input" type="text" placeholder="Username" name="uname" value="<?php echo $uname; ?>" />
          <span style="color:red"><?php echo $err_uname; ?></span>
          <br />
          <input
            class="login-input"
            type="password"
            placeholder="Password" name="pass" value="<?php echo $pass; ?>"/>
          
          <span style="color:red"><?php echo $err_pass; ?></span>
          <br>
          <span style="color:red"><?php echo $err_invalid;?></span>
          <input class="login-form-btn" type="submit" name="submit" value="Sign in">
          
          <div class="text-center p-t-45 p-b-4">
            <span class="txt1">Forgot</span>
            <a href="#" class="txt2 hov1">Username / Password?</a>
          </div>
          <div class="text-center">
            <span class="font">Create an account?</span>
            <a href="registration.php" class="font">Sign up</a>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
