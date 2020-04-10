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
    <section id="navbar">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-sm bg-secondary navbar-dark">
          <!-- Brand -->
          <a class="navbar-brand" href="/Mid-Project/index.php"
            >Bangladesh Airlines</a
          >

          <!-- Links -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="admin.php">Home</a>
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
                  Hi,Admin
                </a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="changepassword.php"
                    >Change Password</a
                  >

                  <a class="dropdown-item" href="/Mid-Project/user/Login.php"
                    >Logout</a
                  >
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </section>
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
          </ul>
        </div>
      </div>
      <div class="split-right">
        <div>
          <div class="search p-l-55 p-r-55 p-t-65 p-b-50">
            <form action="uselectticket.html" class="search-form">
              <span class="search-form-title">List of Flight Book</span>
              <br />
              <br />
              <table class="search-table" style="width: 100%">
                <thead class="search-table">
                  <tr>
                    <th class="search-table">Flight ID</th>
                    <th class="search-table">Username</th>
                    <th class="search-table">Date</th>
                    <th class="search-table">Time</th>
                    <th class="search-table">Payment Number</th>
                    <th class="search-table">Fare</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="search-table">F100</td>
                    <td class="search-table">raju123</td>
                    <td class="search-table">25/12/1977</td>
                    <td class="search-table">12:00</td>
                    <td class="search-table">0215545151</td>
                    <td class="search-table">3000</td>
                  </tr>
                  <tr>
                  <td class="search-table">F100</td>
                    <td class="search-table">raju123</td>
                    <td class="search-table">25/12/1977</td>
                    <td class="search-table">12:00</td>
                    <td class="search-table">0215545151</td>
                    <td class="search-table">3000</td>
                  </tr>
                  <tr>
                  <td class="search-table">F100</td>
                    <td class="search-table">raju123</td>
                    <td class="search-table">25/12/1977</td>
                    <td class="search-table">12:00</td>
                    <td class="search-table">0215545151</td>
                    <td class="search-table">3000</td>
                  </tr>
                  <tr>
                  <td class="search-table">F100</td>
                    <td class="search-table">raju123</td>
                    <td class="search-table">25/12/1977</td>
                    <td class="search-table">12:00</td>
                    <td class="search-table">0215545151</td>
                    <td class="search-table">3000</td>
                  </tr>
                  <tr>
                  <td class="search-table">F100</td>
                    <td class="search-table">raju123</td>
                    <td class="search-table">25/12/1977</td>
                    <td class="search-table">12:00</td>
                    <td class="search-table">0215545151</td>
                    <td class="search-table">3000</td>
                  </tr>
                  <tr>
                  <td class="search-table">F100</td>
                    <td class="search-table">raju123</td>
                    <td class="search-table">25/12/1977</td>
                    <td class="search-table">12:00</td>
                    <td class="search-table">0215545151</td>
                    <td class="search-table">3000</td>
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
