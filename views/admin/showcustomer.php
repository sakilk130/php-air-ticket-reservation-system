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
    <?php include "adminMenu.php"; ?>
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
