<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Payment</title>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/upayment.css" />
  </head>
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
    <section id="payment">
      <div>
        <div class="payment p-l-55 p-r-55 p-t-65 p-b-50">
          <form action="ubookflight.php" class="payment-form">
            <span class="payment-form-title">Pay With bKash</span>
            <img src="/image/bKash.png" alt="" class="bimage" />
            <br />
            <br />
            <table style="width: 80%;" class="pay-table">
              <tr style="text-align: center;" class="payment-table">
                <td class="payment-table payment-input">
                  Ticket Fare
                </td>
                <td class="payment-table payment-input">3500</td>
              </tr>
              <tr style="text-align: center;" class="payment-table">
                <td class="payment-table payment-input">Charge</td>
                <td class="payment-table payment-input">200</td>
              </tr>
              <tr style="text-align: center;" class="payment-table">
                <td class="payment-table payment-input">Total</td>
                <td class="payment-table payment-input">3700</td>
              </tr>
            </table>

            <input
              class="payment-input2"
              type="text"
              name=""
              id=""
              placeholder="Phone Number"
            />
            <button class="payment-form-btn">Pay Now</button>
          </form>
        </div>
      </div>
    </section>
  </body>
</html>
