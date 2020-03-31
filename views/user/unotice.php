<?php
require '../../controllers/user/uNoticeController.php';
$notices = getAllNotice();
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
  <?php
   include("navbar.php"); 
   ?>
    <section id="notice-body">
      <div class="">
        <div class="login p-l-55 p-r-55 p-t-65 p-b-50">
          <form action="udashboard.php" class="login-form">
            <span class="login-form-title">Notice</span>
            <?php
            foreach($notices as $notice)
            {
              echo "<h5>".$notice["id"]."."."</h5>";
              //echo "<br>";
              echo "<h5>".$notice["notice"]."</h5>";
              //echo "<br>";
              echo "<hr>";
            }
            ?>
          </form>
        </div>
      </div>
    </section>
  </body>
</html>
