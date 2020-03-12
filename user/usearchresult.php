<?php
    session_start();
    if(!isset($_SESSION['loggedinuser']))
	{
		header("Location:Login.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Search Result</title>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/usearchresult.css" />
  </head>
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
  <?php include "navbar.php"?>
    <section id="search-result">
      <div>
        <div class="search p-l-55 p-r-55 p-t-65 p-b-50">
          <form action="uselectticket.php" class="search-form">
            <span class="search-form-title">Search Result</span>
            <br />
            <br />
            <table class="search-table" style="width: 100%">
              <thead class="search-table">
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
              <tbody class="search-table">
                <tr>
                  <td class="search-table">F100</td>
                  <td class="search-table">9:00</td>
                  <td class="search-table">Dhaka</td>
                  <td class="search-table">Chittagong</td>
                  <td class="search-table">50</td>
                  <td class="search-table">50</td>
                  <td class="search-table">3000</td>
                  <td class="search-table">
                    <input class="select-btn" type="submit" value="Select" />
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
