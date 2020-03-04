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
    <section id="navbar">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-sm bg-secondary navbar-dark">
          <!-- Brand -->
          <a class="navbar-brand" href="/Mid-Project/index.php">Bangladesh Airlines</a>

          <!-- Links -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="udashboard.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
          </ul>
          <!-- Dropdown -->
          <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="navbardrop"
                  data-toggle="dropdown"
                >
                  Hi,Someone
                </a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="ubookflight.php">Booking</a>
                  <a class="dropdown-item" href="unotice.php">Notice</a>
                  <a class="dropdown-item" href="uchangepassword.php"
                    >Change Password</a
                  >
                  <a class="dropdown-item" href="usettings.php">Settings</a>
                  <a class="dropdown-item" href="Login.php">Logout</a>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </section>
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
