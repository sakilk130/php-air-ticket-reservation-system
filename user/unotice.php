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
    <title>Notice</title>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/unotice.css" />
  </head>
  <body>
    <section id="navbar">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-sm bg-secondary navbar-dark">
          <!-- Brand -->
          <a class="navbar-brand" href="/Mid-Project/index.php">Bangladesh Airlines</a>

          <!-- Links -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="udashboard.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
          </ul>
          <!-- Dropdown -->
          <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="navbardrop"
                  data-toggle="dropdown"
                >
                  Hi,<?php echo $_SESSION['loggedinuser'];?>
                </a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="ubookflight.php">Booking</a>
                  <a class="dropdown-item" href="unotice.php">Notice</a>
                  <a class="dropdown-item" href="uchangepassword.php">
                    Change Password
                  </a>
                  <a class="dropdown-item" href="usettings.php">Settings</a>
                  <a class="dropdown-item" href="Login.php">Logout</a>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </section>
    <section id="notice-body">
      <div class="">
        <div class="login p-l-55 p-r-55 p-t-65 p-b-50">
          <form action="udashboard.php" class="login-form">
            <span class="login-form-title">Notice</span>
            <p>No Notice Here.</p>
          </form>
        </div>
      </div>
    </section>
  </body>
</html>
