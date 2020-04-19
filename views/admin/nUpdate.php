<?php
require_once '../../controllers/admin/showNoticeController.php';
$uid = $_GET["id"];
$notice=getNotice($uid);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Send Notice</title>
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
    <link rel="stylesheet" href="css/showFlight.css" />
  </head>
  <body>
    <?php require_once 'navbar.php';?>
    <section id="admin-menu">
    <?php include "adminMenu.php"; ?>
      <div class="split-right">
        <div>
          <div class="search p-l-55 p-r-55 p-t-65 p-b-50">
            <form action="" class="search-form" method="post">
              <span class="search-form-title">Send Notice To Customer</span>
              <br />
              <br />
              <textarea type="text" name="notice" class="" rows="10" cols="102" placeholder="Type Notice.."><?php echo $notice["notice"]?></textarea>
              <br>
              <span style="color:red"><?php echo $err_notice; ?></span> <br>
              <input type="hidden" name="id" value="<?php echo $notice["id"]?>" >
              <input type="submit" class="searchb" name="updateNotice" value="Update">
            </form>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
