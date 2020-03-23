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
    <?php include "navbar.php"; ?>
    <section id="admin-menu">
    <?php include "superadminmenu.php"; ?>
      <div class="split-right">
        <div>
          <div class="search p-l-55 p-r-55 p-t-65 p-b-50">
            <form action="uselectticket.html" class="search-form">
              <span class="search-form-title">List of Admin</span>
              <br />
              <br />
              <table class="search-table" style="width: 100%">
                <thead class="search-table">
                  <tr>
                    <th class="search-table">Name</th>
                    <th class="search-table">User Name</th>
                    <th class="search-table">Email Address</th>
                    <th class="search-table">Phone Number</th>
                    <th class="search-table">Birth Date</th>
                  </tr>
                </thead>
                <tbody class="search-table">
                  <tr>
                    <td class="search-table">Admin1</td>
                    <td class="search-table">admin1</td>
                    <td class="search-table">admin1@somthing.com</td>
                    <td class="search-table">+8801200000100</td>
                    <td class="search-table">03-02-96</td>
                  </tr>
                  <tr>
                    <td class="search-table">Admin2</td>
                    <td class="search-table">admin2</td>
                    <td class="search-table">admin2@somthing.com</td>
                    <td class="search-table">+8801200000101</td>
                    <td class="search-table">03-02-96</td>
                  </tr>
                  <tr>
                    <td class="search-table">Admin3</td>
                    <td class="search-table">admin3</td>
                    <td class="search-table">admin3@somthing.com</td>
                    <td class="search-table">+8801200000103</td>
                    <td class="search-table">03-02-96</td>
                  </tr>
                </tbody>
              </table>
            </form>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
