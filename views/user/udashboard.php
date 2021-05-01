<?php
require '../../controllers/user/uDashboardControllers.php';

$products = getAllFlights();
	// echo "<pre>";
	// print_r($products);
  // echo "</pre>";
  
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Dashboard</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/udashboard.css" />
  </head>
  <body>
   <?php
   require_once("navbar.php"); 
   ?>
   
    <table class="fulltable">
      <tr>
        <td>
          <section id="search-flight">
            <div class="container-fluid">
              <div class="login p-l-55 p-r-55 p-t-65 p-b-50">
                <form action="" class="login-form" method="post">
                  <span class="login-form-title">Search Flight</span>
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
                    <option value="Cox's Bazar"  <?php if (
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
                    <option value="Cox's Bazar"  <?php if (
                        $to == "Cox's Bazar"
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
                  <input class="login-input" type="date" name="date" value="<?php echo $date; ?>" /><br />
                  <span style="color:red"><?php echo $err_date; ?></span>
                  <input type="submit" class="login-form-btn" name="submit" value="Search">
                  
                </form>
              </div>
            </div>
          </section>
        </td>
        <td>
          <section id="slider">
            <div class="slide-changer">
              <div
                id="carouselExampleControls"
                class="carousel slide"
                data-ride="carousel"
              >
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img
                      class="d-block w-100 cimage"
                      src="../../image/airline.jpg"
                      alt="First slide"
                    />
                  </div>
                  <div class="carousel-item">
                    <img
                      class="d-block w-100 cimage"
                      src="../../image/airline2.jpg"
                      alt="Second slide"
                    />
                  </div>
                  <div class="carousel-item">
                    <img
                      class="d-block w-100 cimage"
                      src="../../image/airline3.jpg"
                      alt="Third slide"
                    />
                  </div>
                </div>
                <a
                  class="carousel-control-prev"
                  href="#carouselExampleControls"
                  role="button"
                  data-slide="prev"
                >
                  <span
                    class="carousel-control-prev-icon"
                    aria-hidden="true"
                  ></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a
                  class="carousel-control-next"
                  href="#carouselExampleControls"
                  role="button"
                  data-slide="next"
                >
                  <span
                    class="carousel-control-next-icon"
                    aria-hidden="true"
                  ></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
          </section>
        </td>
      </tr>
    </table>
  </body>
</html>
