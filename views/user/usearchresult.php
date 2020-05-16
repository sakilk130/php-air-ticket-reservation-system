<?php
require '../../controllers/user/uSearchResultControllers.php'; 
$ffrom = $_GET["from"];
$tto = $_GET["to"];
$ddate = $_GET["date"];
$flights = getAllFlights($ffrom,$tto,$ddate);

// echo "<pre>";
// print_r($flights);
// echo "</pre>";
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
           // echo '<td><a href="editproduct.php?id='.$product["id"].'" class="btn btn-success">Edit</a></td>';
            echo '<td class="search-table"><a href="uselectticket.php?id='.$flight["fid"].'" class="select-btn">Select</a></td>';
            //echo '<td class="search-table"><input class="select-btn" type="submit" name="select1" value="Select">';
            echo "<br>";
            echo '<span style="color:red">'; 
            echo $errr_select1;
            echo '</span>';
            echo '</td>';
            echo "</tr>";
				}
			?>
                <!-- <tr>
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
                </tr> -->
              </tbody>
            </table>
          </form>
        </div>
      </div>
    </section>
  </body>
</html>
