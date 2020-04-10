<?php
require_once '../../controllers/admin/addflightController.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title>
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
    <link rel="stylesheet" href="css/admin.css" />
  </head>
  <body>
  <?php include "navbar.php"; ?>
    <section id="admin-menu">
      <div class="split left">
        <div class="centered">
          <h4 style="color: beige;">Menu</h4>
          <ul class="fa-ul">
            <li>
              <a href="addFlight.php" style="color: #4caf50;"
                ><i class="fa fa-user-plus" style="font-size:30px"></i> Add
                Flight</a
              >
            </li>
            <li>
              <a href="updateFlight.php" style="color: #4caf50;"
                ><i class="fa fa-refresh" style="font-size:30px "></i> Update
                Flight</a
              >
            </li>
            <li>
              <a href="showFlight.php" style="color: #4caf50;"
                ><i class="fa fa-group" style="font-size:30px"></i> Show
                Flight</a
              >
            </li>
            <li>
              <a href="removeFlight.html" style="color: #4caf50;"
                ><i class="fa fa-close" style="font-size:30px"></i> Remove
                Flight</a
              >
            </li>
            <li>
              <a href="showcustomer.php" style="color: #4caf50;"
                ><i class="fa fa-eye" style="font-size:30px"></i> Show
                Customer</a
              >
            </li>
            <li>
              <a href="" style="color: #4caf50;"
                ><i class="fa fa-paper-plane-o" style="font-size:30px"></i> Show
                Bookflight</a
              >
            </li>
            <li>
              <a href="" style="color: #4caf50;"
                ><i class="fa fa-bell-o" style="font-size:30px"></i> Show Send
                Notice</a
              >
            </li>
          </ul>
        </div>
      </div>
      <div class="split-right">
        <div>
          <div class="login p-l-55 p-r-55 p-t-65 p-b-50">
            <form action="" class="login-form" method="post">
              <span class="login-form-title">Add Flight</span>
              <input name="fid" class="login-input" type="text" placeholder="Flight ID" value="<?php echo $fid;?>" />
              <span style="color:red"><?php echo $err_fid; ?></span>
              <br />
              <span>Departing Time</span><br />
              <input
                class="login-input"
                name="ftime"
                type="time"
                placeholder="Departing Time"
                value="<?php echo $ftime;?>"
              />
              <span style="color:red"><?php echo $err_ftime; ?></span>
              <br />
              <span>From</span><br />
              <select name="from" id="" class="login-input">
                <option value="NULL">---</option>
                <option value="Dhaka" <?php if ($from == 'Dhaka') {
                        echo 'selected';
                    } ?>>DHAKA</option>
                <option value="Chittagong" <?php if ($from == 'Chittagong') {
                        echo 'selected';
                    } ?>>CHITTAGONG</option>
                <option value="Cox's Bazar" <?php if (
                        $from == "Cox's Bazar"
                    ) {
                        echo 'selected';
                    } ?>>COX'S BAZAR</option>
                <option value="Rajshahi" <?php if ($from == 'Rajshahi') {
                        echo 'selected';
                    } ?>>RAJSHAHI</option>
              </select>
              <span style="color:red"><?php echo $err_from; ?></span>
              <br />
              <span>To</span> <br />
              <select name="to" id="" class="login-input">
                <option value="NULL">---</option>
                <option value="Dhaka" <?php if ($to == 'Dhaka') {
                        echo 'selected';
                    } ?>>DHAKA</option>
                <option value="Chittagong" <?php if ($to == 'Chittagong') {
                        echo 'selected';
                    } ?>>CHITTAGONG</option>
                <option value="Cox's Bazar" <?php if (
                        $from == "Cox's Bazar"
                    ) {
                        echo 'selected';
                    } ?>>COX'S BAZAR</option>
                <option value="Rajshahi" <?php if ($to == 'Rajshahi') {
                        echo 'selected';
                    } ?>>RAJSHAHI</option>
              </select>
              <span style="color:red"><?php echo $err_to; ?></span>
              <span style="color:red"><?php echo $err_select; ?></span>
              <br />
              <span>Date</span><br />
              <input name="fdate" class="login-input" type="date" value="<?php echo $fdate;?>"/>
              <span style="color:red"><?php echo $err_fdate; ?></span>
              <br />
              <input name="fseat" class="login-input" type="text" placeholder="Total Seat" value="<?php echo $fseat;?>" />
              <span style="color:red"><?php echo $err_fseat; ?></span>
              <br />
              <input name="ffare" class="login-input" type="text" placeholder="Fare" value="<?php echo $ffare;?>" />
              <span style="color:red"><?php echo $err_ffare; ?></span>
              <br />
              <input class="login-form-btn" type="submit" name="addFlight" value="Add Flight">
            </form>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
