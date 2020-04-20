<?php
require_once '../../controllers/superadmin/updateadminController.php';

$admins = getAllAdmin();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Super Admin</title>
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
    <link rel="stylesheet" href="css/showadmin.css" />
  </head>
  <body>
  <script src="updateAjax.js"></script>
    <?php include "navbar.php"; ?>
    <section id="admin-menu">
    <?php include "superadminmenu.php"; ?>
      <div class="split-right">
        <div>
          <div class="search p-l-55 p-r-55 p-t-65 p-b-50">
          <span class="search-form-title">Update Admin</span>
           <br />
           <input class="input" type="text" placeholder="Search Admin.." onkeyup="search()" id="search" />
              <br />
              <table class="search-table" style="width: 100%">
                <thead class="search-table">
                  <tr>
                    <th class="search-table">Name</th>
                    <th class="search-table">User Name</th>
                    <th class="search-table">Email Address</th>
                    <th class="search-table">Phone Number</th>
                    <th class="search-table">Birth Date</th>
                    <th class="search-table">Choose</th>
                  </tr>
                </thead>
                <tbody id="search_result" class="search-table">
                <?php
				// foreach($admins as $admin)
				// {
        //   $name=$admin["fname"].$admin["lname"];
				// 	echo "<tr>";
				// 		echo '<td class="search-table">'.$name.'</td>';
				// 		echo '<td class="search-table">'.$admin["uname"].'</td>';
				// 		echo '<td class="search-table">'.$admin["email"].'</td>';
				// 		echo '<td class="search-table">'.$admin["phone"].'</td>';
        //     echo '<td class="search-table">'.$admin["bdate"].'</td>';
        //     echo '<td><a href="update.php?id='.$admin["userid"].'" class="btn btn-success">Update</a></td>';
        //     echo "</tr>";
				// }
			?>     
                </tbody>
              </table>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
