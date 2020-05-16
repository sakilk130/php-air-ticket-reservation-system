<?php
require '../controllers/indexController.php';
$flights = getAllFlights();

?>
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

    <section id="nvbar">
        <div class="container-fluid">
            <nav class=" navbar navbar-expand-md bg-secondary navbar-dark">
            <img class="airline-logo" src="airline-logo.png" alt="">
            <a class="navbar-brand" href="index.php">Bangladesh Airlines</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#footer">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item">
                      <form action="Login.php">
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
          <form action="" method="post">
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
                    <option value="Rajshahi" <?php if ($from == 'Rajshahi') {
                        echo 'selected';
                    } ?>>RAJSHAHI</option>
                  </select>
                </td>
                <td>
                  <select name="to" id="" class="search-input">
                    <option value="NULL" selected="selected">---</option>
                    <option value="Dhaka" <?php if ($to == 'Dhaka') {
                        echo 'selected';
                    } ?>>DHAKA</option>
                    <option value="Chittagong" <?php if ($to == 'Chittagong') {
                        echo 'selected';
                    } ?>>CHITTAGONG</option>
                    <option value="Cox's Bazar" <?php if (
                        $to == "Cox's Bazar"
                    ) {
                        echo 'selected';
                    } ?>>COX'S BAZAR</option>
                    <option value="Rajshahi" <?php if ($to == 'Rajshahi') {
                        echo 'selected';
                    } ?>>RAJSHAHI</option>
                  </select>
                </td>
                <td><input type="date" class="search-input" name="ddate" value="<?php echo $ddate; ?>"></td>
                <td><input class="search-btn" type="submit" value="Search" name="submit"></td>
              </tr>
              <tr>
              <td><span style="color:red"><?php echo $err_from; ?></span></td>
              <td>
              <span style="color:red"><?php echo $err_to; ?></span>
              <span style="color:red"><?php echo $err_select; ?></span>
              </td>
              <td><span style="color:red"><?php echo $err_date; ?></span></td>
              </tr>
            </table>
          </form>
        </div>
      </section>
      <section id="search-result">
         <div>
          <div>
            <form action="" method="post">
              <table class="search-table" style="width: 100%">
                <thead>
                  <tr>
                  <th class="search-table">Flight ID</th>
                  <th class="search-table">Departing Time</th>
                  <th class="search-table">Departure</th>
                  <th class="search-table">Arrival</th>
                  <th class="search-table">Date</th>
                  <th class="search-table">Seat Available</th>
                  <th class="search-table">Fare</th>
                  <th class="search-table">Choose</th>
                </tr>
                </thead>
        
                <tbody>
                <?php
				foreach($flights as $flight)
				{
					echo "<tr>";
						echo '<td class="search-table">'.$flight["flightid"].'</td>';
						echo '<td class="search-table">'.$flight["time"].'</td>';
						echo '<td class="search-table">'.$flight["ffrom"].'</td>';
						echo '<td class="search-table">'.$flight["tto"].'</td>';
            echo '<td class="search-table">'.$flight["ddate"].'</td>';
						echo '<td class="search-table">'.$flight["seat"].'</td>';
            echo '<td class="search-table">'.$flight["fare"].'</td>';
            echo '<td class="search-table"><input class="select-btn" type="submit" name="select1" value="Select">';
            echo "<br>";
            echo '<span style="color:red">'; 
            echo $errr_select1;
            echo '</span>';
            echo '</td>';
            echo "</tr>";
				}
			?>       
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
      <section id="contact">
      <div class="login p-l-55 p-r-55 p-t-65 p-b-50">
        <form action="" method="post" class="login-form">
          <h1 class="login-form-title">Contact Us</h1>
          <input class="login-input" name="name" type="text" placeholder="Enter Name" value="<?php echo $name; ?>"/>
          <span style="color:red"><?php echo $err_name; ?></span>
          <br />
          <input
            class="login-input"
            type="email"
            name="email"
            placeholder="Mail Address"
            value="<?php echo $email; ?>"
          />
          <span style="color:red"><?php echo $err_email; ?></span>
          <br />
          <input class="login-input"  name="subject" type="text" placeholder="Subject" value="<?php echo $subject; ?>"/>
          <span style="color:red"><?php echo $err_subject; ?></span>
          <br>
          <textarea class="login-input" name="description" id="" cols="30" rows="10" placeholder="Description" value="<?php echo $description; ?>"></textarea>
          <span style="color:red"><?php echo $err_description; ?></span>
          <input type="submit" name="submit2" class="login-form-btn" value="Submit">
          
        </form>
      </div>
      </section>
    <footer style="background: #6c757d;" class="white-section" id="footer">
      <div class="container-fluid">
      <i class="fa fa-facebook-official"></i>
      <i class="fa fa-instagram"></i>
      <i class="fa fa-twitter"></i>
      <p>©2020 Bangladesh Airlines</p>
      </div>
    </footer>
</body>

</html>