<?php
require_once '../../controllers/user/uBookFlightController.php';
$uname=$_SESSION['loggedinuser'];
$s="localhost";
$u="sakil";
$p="sakil";
$d="airlinedb";
$conn=mysqli_connect($s,$u,$p,$d);
$query="SELECT * FROM tickets WHERE uname='$uname'";
$rs=mysqli_query($conn,$query);
mysqli_close($conn);
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
                  <th class="book-table">Seat</th>
                  <th class="book-table">Choose</th>
                </tr>
              </thead>
              <tbody class="book-table">
              <?php
        while($row=mysqli_fetch_assoc($rs))
		{
			echo "<tr>";
            $id=$row["flightid"];
            $ss="localhost";
            $uu="sakil";
            $pp="sakil";
            $dd="airlinedb";
            $connn=mysqli_connect($ss,$uu,$pp,$dd);
            $queryy="SELECT * FROM flight WHERE fid=$id";
            $rss=mysqli_query($connn,$queryy);
            mysqli_close($conn);
            while($roww=mysqli_fetch_assoc($rss))
            {
						echo '<td class="book-table">'.$roww["flightid"].'</td>';
            echo '<td class="book-table">'.$roww["ttime"].'</td>';
            echo '<td class="book-table">'.$roww["ffrom"].'</td>';
            echo '<td class="book-table">'.$roww["tto"].'</td>';
						echo '<td class="book-table">'.$roww["fare"].'</td>';
            }
            echo '<td class="book-table">'.$row["sseat"].'</td>'; 
            echo '<td class="book-table">';
            echo "<button class='print-btn' onclick='window.print()'>Print</button>";
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
  </body>
</html>
