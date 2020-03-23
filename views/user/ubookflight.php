<?php
    session_start();
    if(!isset($_SESSION['loggedinuser']))
	{
    header("Location:../Login.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Book Flight</title>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </head>
  <link rel="stylesheet" href="css/ubookflight.css" />
  <body>
    <?php
     if(isset($_POST['submit2'])){
      session_start();
      if (isset($_SESSION['username']))
      {
        unset($_SESSION['username']);
      }
      session_destroy();
      header("location:Login.php");
      exit();
      }
    ?>
  <?php
   include("navbar.php"); 
   ?>
    <section id="ubookflight">
      <div class="">
        <div class="login p-l-55 p-r-55 p-t-65 p-b-50">
          <form action="#" class="login-form">
            <span class="login-form-title">Booking</span>
            <br />
            <br />
            <table class="book-table" style="width: 100%">
              <thead class="book-table">
                <tr>
                  <th class="book-table">Flight ID</th>
                  <th class="book-table">Departing Time</th>
                  <th class="book-table">Departure</th>
                  <th class="book-table">Arrival</th>
                  <th class="book-table">Fare</th>
                  <th class="book-table">Choose</th>
                </tr>
              </thead>
              <tbody class="book-table">
                <tr>
                  <td class="book-table">F100</td>
                  <td class="book-table">9:00</td>
                  <td class="book-table">Dhaka</td>
                  <td class="book-table">Chittagong</td>
                  <td class="book-table">3000</td>
                  <td class="book-table">
                    <input class="print-btn" type="submit" value="Print" />
                  </td>
                </tr>
              </tbody>
            </table>
          </form>
        </div>
      </div>
    </section>
  </body>
</html>
