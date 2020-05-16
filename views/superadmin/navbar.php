<?php
require '../../controllers/superadmin/navbarController.php';
?>
<html>
  <body>
    <section id="navbar">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-sm bg-secondary navbar-dark">
          <!-- Brand -->
          <a class="navbar-brand" href="/Mid-Project/index.php"
            >Bangladesh Airlines</a
          >

          <!-- Links -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="superadmin.php">Home</a>
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
                  <span style="color: #fff">Hi, <?php echo $name." ".$name1; ?> </span>
                 
                </a>
                <div class="dropdown-menu">
                <form action="" method="post">
                <a class="dropdown-item" href="changePassword.php"
                    >Change Password</a
                  >
                    <input
                      class="dropdown-item"
                      type="submit"
                      name="logout"
                      value="Logout"
                    />
                   
                  </form>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </section>
  </body>
</html>
