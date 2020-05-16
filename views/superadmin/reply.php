<?php
require_once '../../controllers/superadmin/replyController.php';
$id = $_GET["id"];
$email=getEmail($id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reply</title>
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
    <link rel="stylesheet" href="css/showadmin.css" />
</head>
<body>
<?php
    include "navbar.php";
    ?>
     <section id="admin-menu">
    <?php include "superadminmenu.php"; ?>
      <div class="split-right">
        <div>
          <div class="search p-l-55 p-r-55 p-t-65 p-b-50">
            <form action="mailto:<?php echo $email['email'];?>" class="search-form">
              <span class="search-form-title">Contact</span>
              <br>
              <span class="tomail"> From : Sony Khan--ksony13000@gmail.com</span><br>
              <span class="tomail">To : <?php echo $email['email']; ?></span>
              <br />
              <span style="color:red"><?php echo $err_notice; ?></span> <br>
              <input type="submit" class="searchb" name="sendNotice" value="Reply" style="    margin-left: 450px;
    margin-top: 0px;">
            </form>
          </div>
        </div>
      </div>
    </section>
</body>
</html>