<?php
    session_start();
    if(!isset($_SESSION['loggedinuser']))
	{
		header("Location:Login.php");
	}
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
   include("navbar.html"); 
   ?>
    <section id="usettings">
      <div class="">
        <div class="login p-l-55 p-r-55 p-t-65 p-b-50">
          <form action="udashboard.php" class="login-form">
            <span class="login-form-title">Change Password</span>
            <input
              class="login-input"
              type="password"
              placeholder="Current Password"
            />
            <br />
            <input
              class="login-input"
              type="password"
              name=""
              id=""
              placeholder="New Password"
            />
            <br />
            <input
              class="login-input"
              type="password"
              name=""
              id=""
              placeholder="Confirm New Password"
            />
            <br />
            <button class="login-form-btn">Change</button>
          </form>
        </div>
      </div>
    </section>
  </body>
</html>
