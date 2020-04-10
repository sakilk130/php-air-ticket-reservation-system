<?php
require_once '../../controllers/admin/navbarController.php';
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
              <a class="nav-link" href="admin.php">Home</a>
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
                  <a class="dropdown-item" href="changepassword.php"
                    >Change Password</a
                  >
                  <a class="dropdown-item" href="../../views/Login.php"
                    >Logout</a
                  >
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </section>
</body>
</html>