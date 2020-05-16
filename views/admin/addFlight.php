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
    <!-- <script src="valid.js"></script> -->
  </head>
  <body>
  <?php include "navbar.php"; ?>
    <section id="admin-menu">
    <?php include "adminMenu.php"; ?>
      <div class="split-right">
        <div>
          <div class="login p-l-55 p-r-55 p-t-65 p-b-50">
            <form action="" class="login-form" method="post">
              <span class="login-form-title">Add Flight</span>
              <input name="fid" class="login-input" type="text" placeholder="Flight ID" id="flight_id" value="<?php echo $fid; ?>" />
              <span style="color:red"><?php echo $err_fid;?></span>
              <br />
              <span>Departing Time</span><br />
              <input
                class="login-input"
                name="ftime"
                type="time"
                placeholder="Departing Time"
                id="flight_time"
              />
              <span style="color:red" id="err_flight_time"><?php echo $err_ftime;?></span>
              <br />
              <span>From</span><br />
              <select name="from" id="flight_from" class="login-input">
                <option value="NULL">---</option>
                <option value="Dhaka">DHAKA</option>
                <option value="Chittagong">CHITTAGONG</option>
                <option value="Cox's Bazar">COX'S BAZAR</option>
                <option value="Rajshahi">RAJSHAHI</option>
              </select>
              <span style="color:red" id="err_flight_from"><?php echo $err_from;?></span>
              <br />
              <span>To</span> <br />
              <select name="to" id="flight_to" class="login-input">
                <option value="NULL">---</option>
                <option value="Dhaka">DHAKA</option>
                <option value="Chittagong">CHITTAGONG</option>
                <option value="Cox's Bazar">COX'S BAZAR</option>
                <option value="Rajshahi">RAJSHAHI</option>
              </select>
              <span style="color:red" id="err_flight_to"><?php echo $err_to;?></span>
              <span style="color:red" id="err_flight_wrong"><?php echo $err_select;?></span>
              <br />
              <span>Date</span><br />
              <input name="fdate" class="login-input" type="date" id="flight_seat" />
              <span style="color:red" id="err_flight_seat"><?php echo $err_fdate;?></span>
              <br />
              <input name="fseat" class="login-input" type="text" placeholder="Total Seat" id="flight_date" />
              <span style="color:red" id="err_flight_date"><?php echo $err_fseat;?></span>
              <br />
              <input name="ffare" class="login-input" type="text" placeholder="Fare" id="flight_fare" />
              <span style="color:red" id="err_flight_fare"><?php echo $err_ffare;?></span>
              <br />
              <input class="login-form-btn" type="submit" name="addFlight" value="Add Flight">
            </form>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
