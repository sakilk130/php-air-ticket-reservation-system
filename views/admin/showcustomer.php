<?php
require_once '../../controllers/admin/showcustomerController.php';
$users = getAllCustomer();
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
    <link rel="stylesheet" href="css/showFlight.css" />
  </head>
  <body>
  <?php require_once 'navbar.php'; ?>
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
              <a href="removeFlight.php" style="color: #4caf50;"
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
              <a href="showbookflight.php" style="color: #4caf50;"
                ><i class="fa fa-paper-plane-o" style="font-size:30px"></i> Show
                Bookflight</a
              >
            </li>
            <li>
              <a href="sendnotice.php" style="color: #4caf50;"
                ><i class="fa fa-bell-o" style="font-size:30px"></i>Send
                Notice</a
              >
            </li>
            <li>
          <a href="showNotice.php" style="color: #4caf50;"
            ><i class="fa fa-bell-slash" style="font-size:30px;color:blue"></i>Show
            Notice</a
          >
        </li>
          </ul>
        </div>
      </div>
      <div class="split-right">
        <div>
          <div class="search p-l-55 p-r-55 p-t-65 p-b-50">
            <form action="uselectticket.html" class="search-form">
              <span class="search-form-title">List of Coustomers</span>
              <br />
              <br />
              <table class="search-table" style="width: 100%">
                <thead class="search-table">
                  <tr>
                    <th class="search-table">First Name</th>
                    <th class="search-table">Last Name</th>
                    <th class="search-table">Username</th>
                    <th class="search-table">Email</th>
                    <th class="search-table">Phone</th>
                    <th class="search-table">Gender</th>
                    <th class="search-table">Birthdate</th>
                  </tr>
                </thead>
                <tbody>
                <?php
				foreach($users as $user)
				{
					echo "<tr>";
						echo '<td class="search-table">'.$user["fname"].'</td>';
						echo '<td class="search-table">'.$user["lname"].'</td>';
						echo '<td class="search-table">'.$user["uname"].'</td>';
            echo '<td class="search-table">'.$user["email"].'</td>';
            echo '<td class="search-table">'.$user["phone"].'</td>';
            echo '<td class="search-table">'.$user["gender"].'</td>';
            echo '<td class="search-table">'.$user["bdate"].'</td>';
            //echo '<td><a href="remove.php?id='.$flight["fid"].'" class="btn btn-danger">Remove</a></td>';
            echo "</tr>";
				}
			?> 
                </tbody>
              </table>
            </form>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
