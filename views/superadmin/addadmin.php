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
            <form action="" class="login-form">
              <span class="login-form-title">Add Admin</span>
              <input class="login-input" type="text" placeholder="Full Name" />
              <br />
              <input class="login-input" type="text" placeholder="User Name" />
              <br />
              <input
                class="login-input"
                type="email"
                placeholder="Email Address"
              />
              <br />
              <input
                class="login-input"
                type="text"
                placeholder="Phone Number"
              />
              <br />
              <span class="input">Date of Birth</span>
              <input class="login-input" type="date" name="" />
              <br />
              <input
                class="login-input"
                type="password"
                placeholder="Password"
              />
              <br />
              <input
                class="login-input"
                type="password"
                placeholder="Confirm Password"
              />
              <br />
              <button class="login-form-btn">Add Admin</button>
            </form>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
