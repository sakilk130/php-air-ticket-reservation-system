<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bangladesh Airlines - Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700,900|Ubuntu:400,500,700"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

    <link href="https://fonts.googleapis.com/css?family=Coda+Caption:800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="user/css/index.css">
</head>

<body>
<?php
  $err_from = '';
  $from = '';
  $err_to = '';
  $to = '';
  $err_select = '';
  $err_date = '';
  $date = '';

  if (isset($_POST['submit'])) {
      if ($_POST['from'] == 'NULL') {
          $err_from = '*Please Select';
      } else {
          $from = $_POST['from'];
      }
      if ($_POST['to'] == 'NULL') {
          $err_to = '*Please Select';
      } else {
          if ($_POST['from'] === $_POST['to']) {
              $err_select = '*Error Select';
          } else {
              $to = $_POST['to'];
          }
      }
      if (empty($_POST['date'])) {
          $err_date = '*Date Required';
      } else {
          $date = $_POST['date'];
      }
  }
  ?>

  <?php
  $select1 = '';
  $errr_select1 = '';
  if (isset($_POST['select1'])) {
      if ($select1 == '') {
          $errr_select1 = '*You Need To Login First';
      }
  }
  ?>

  <?php
  $select2 = '';
  $errr_select2 = '';
  if (isset($_POST['select2'])) {
      if ($select2 == '') {
          $errr_select2 = '*You Need To Login First';
      }
  }
  ?>
  <?php
  $select3 = '';
  $errr_select3 = '';
  if (isset($_POST['select3'])) {
      if ($select3 == '') {
          $errr_select3 = '*You Need To Login First';
      }
  }
  ?>
  <?php
  $select4 = '';
  $errr_select4 = '';
  if (isset($_POST['select4'])) {
      if ($select4 == '') {
          $errr_select4 = '*You Need To Login First';
      }
  }
  ?>
  <?php
  $select5 = '';
  $errr_select5 = '';
  if (isset($_POST['select5'])) {
      if ($select5 == '') {
          $errr_select5 = '*You Need To Login First';
      }
  }
  ?>
  <?php
  $select6 = '';
  $errr_select6 = '';
  if (isset($_POST['select6'])) {
      if ($select6 == '') {
          $errr_select6 = '*You Need To Login First';
      }
  }
  ?>
    <section id="nvbar">
        <div class="container-fluid">
            <nav class=" navbar navbar-expand-md bg-secondary navbar-dark">
            <img class="airline-logo" src="airline-logo.png" alt="">
            <a class="navbar-brand" href="index.html">Bangladesh Airlines</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                      <form action="user/Login.html">
                      <input type="submit" value="Sign In" name="submit" class="top-sign-btn">
                    </form>
                    </li>
                </ul>
            </div>
            </nav>
        </div>
    </section>
    <section id="background-image">
      <section id="search-flight">
        <div class="flight-search">
          <form action="">
            <h1 class="flight2-search">Flight Search</h1>
            <table>
              <tr>
                <td>From:</td>
                <td>To:</td>
                <td>Date:</td>
              </tr>
              <tr>
                <td>
                  <select name="from" id="" class="search-input">
                    <option value="NULL">---</option>
                    <option value="Dhaka" <?php if ($from == 'Dhaka') {
                        echo 'selected';
                    } ?>>DHAKA</option>
                    <option value="Chittagong"  <?php if (
                        $from == 'Chittagong'
                    ) {
                        echo 'selected';
                    } ?>>CHITTAGONG</option>
                    <option value="Cox's Bazar"  <?php if (
                        $from == "Cox's Bazar"
                    ) {
                        echo 'selected';
                    } ?>>COX'S BAZAR</option>
                    <option value="">RAJSHAHI</option>
                  </select>
                </td>
                <td>
                  <select name="" id="" class="search-input">
                    <option value="">---</option>
                    <option value="">DHAKA</option>
                    <option value="">CHITTAGONG</option>
                    <option value="">COX'S BAZAR</option>
                    <option value="">RAJSHAHI</option>
                  </select>
                </td>
                <td><input type="date" class="search-input"></td>
                <td><input class="search-btn" type="submit" value="Search"></td>
              </tr>
            </table>
          </form>
        </div>
      </section>
      <section id="search-result">
        <div>
          <div>
            <form action="">
              <table class="search-table" style="width: 100%">
                <thead>
                  <tr>
                  <th class="search-table">Flight ID</th>
                  <th class="search-table">Departing Time</th>
                  <th class="search-table">Departure</th>
                  <th class="search-table">Arrival</th>
                  <th class="search-table">Total Seat</th>
                  <th class="search-table">Seat Available</th>
                  <th class="search-table">Fare</th>
                  <th class="search-table">Choose</th>
                </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="search-table">F100</td>
                    <td class="search-table">9:00AM</td>
                    <td class="search-table">Dhaka</td>
                    <td class="search-table">Cox's Bazar</td>
                    <td class="search-table">50</td>
                    <td class="search-table">50</td>
                    <td class="search-table">2500</td>
                    <td class="search-table"><input class="select-btn" type="submit" name="" id="" value="Select"></<h3>
                  </tr>
                  <tr>
                    <td class="search-table">F100</td>
                    <td class="search-table">11:00AM</td>
                    <td class="search-table">Dhaka</td>
                    <td class="search-table">Cox's Bazar</td>
                    <td class="search-table">50</td>
                    <td class="search-table">50</td>
                    <td class="search-table">2500</td>
                    <td class="search-table"><input class="select-btn" type="submit" name="" id="" value="Select"></td>
                  </tr>
                  <tr>
                    <td class="search-table">F100</td>
                    <td class="search-table">1:00PM</td>
                    <td class="search-table">Dhaka</td>
                    <td class="search-table">Cox's Bazar</td>
                    <td class="search-table">50</td>
                    <td class="search-table">50</td>
                    <td class="search-table">2500</td>
                    <td class="search-table "><input class="select-btn" type="submit" name="" id="" value="Select"></td>
                  </tr>
                  <tr>
                    <td class="search-table">F100</td>
                    <td class="search-table">1:00PM</td>
                    <td class="search-table">Dhaka</td>
                    <td class="search-table">Cox's Bazar</td>
                    <td class="search-table">50</td>
                    <td class="search-table">50</td>
                    <td class="search-table">2500</td>
                    <td class="search-table"><input class="select-btn" type="submit" name="" id="" value="Select"></td>
                  </tr>
                  <tr>
                    <td class="search-table">F100</td>
                    <td class="search-table">1:00PM</td>
                    <td class="search-table">Dhaka</td>
                    <td class="search-table">Cox's Bazar</td>
                    <td class="search-table">50</td>
                    <td class="search-table">50</td>
                    <td class="search-table">2500</td>
                    <td class="search-table"><input class="select-btn" type="submit" name="" id="" value="Select"></td>
                  </tr>
                  <tr>
                    <td class="search-table">F100</td>
                    <td class="search-table">1:00PM</td>
                    <td class="search-table">Dhaka</td>
                    <td class="search-table">Cox's Bazar</td>
                    <td class="search-table">50</td>
                    <td class="search-table">50</td>
                    <td class="search-table">2500</td>
                    <td class="search-table"><input class="select-btn" type="submit" name="" id="" value="Select"></td>
                  </tr>
                </tbody>
              </table>
            </form>
          </div>
        </div>
      </section>
    </section>
    
    <section id="why-us">
        <h1 class="bookus">Why Choose Us</h1>
        <div class="container-fluid why">
          <div class="row">
            <div class="col-lg-4">
              <div class="text">
                <i class="fa fa-asl-interpreting"></i>
                <h4>Get the best deals</h4>
                <p>We search and compare real-time prices on flights, hotels and cars so you can find the cheapest, quickest and best travel deals</p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="text">
                <i class="fa fa-money"></i>
                <h4>100% price transparency</h4>
                <p>The prices you see are never affected by your searches, no matter how many you make. We do not use cookies to adjust or increase prices.</p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="text">
                <i class="fa fa-handshake-o"></i>
                <h4>Trusted and free</h4>
                <p>We’re completely free to use – no hidden charges or fees – and we’re endorsed by Frommer’s, CNN and the New York Times</p>
              </div>
            </div>
            <div class="col-lg-4">
                <div class="text">
                    <i class="fa fa-cogs"></i>
                    <h4>Fast & Easy Booking</h4>
                    <p>The prices you see are never affected by your searches, no matter how many you make. We do not use cookies to adjust or increase prices.</p>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="text">
                  <i class="fa fa-dot-circle-o"></i>
                  <h4>Any Time Any Where</h4>
                  <p>We’re completely free to use – no hidden charges or fees – and we’re endorsed by Frommer’s, CNN and the New York Times</p>
                </div>
              </div>
            <div class="col-lg-4">
                <div class="text">
                  <i class="fa fa-comments"></i>
                  <h4>24/7 Support</h4>
                  <p>Our experts work day and night to solve all your cargo-related problems.</p>
                </div>
              </div>
            </div>
          </div>
      </section>
</body>

</html>