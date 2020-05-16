<?php
require '../../controllers/superadmin/contactUsController.php';
$contact=getAllContact();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
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
    <?php
    include "navbar.php";
    ?>
     <section id="admin-menu">
    <?php include "superadminmenu.php"; ?>
      <div class="split-right">
        <div>
          <div class="search p-l-55 p-r-55 p-t-65 p-b-50">
            <form  class="search-form">
              <span class="search-form-title">Contact</span>
              <br />
              <br />
              <table class="search-table" style="width: 100%">
                <thead class="search-table">
                  <tr>
                    <th class="search-table">Name</th>
                    <th class="search-table">Email</th>
                    <th class="search-table">Subject</th>
                    <th class="search-table">Description</th>
                    <th class="search-table">Choose</th>
                  </tr>
                </thead>
                <tbody class="search-table">
                <?php
				foreach($contact as $contacts)
				{
					echo "<tr>";
						echo '<td class="search-table">'.$contacts["nname"].'</td>';
						echo '<td class="search-table">'.$contacts["email"].'</td>';
						echo '<td class="search-table">'.$contacts["ssubject"].'</td>';
            echo '<td class="search-table">'.$contacts["ddescription"].'</td>';
            echo '<td class="search-table"><a href="reply.php?id='.$contacts['id'].'" class="btn btn-success">Reply</a></td>';
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