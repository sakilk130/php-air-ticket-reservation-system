<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Select Ticket</title>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/uselectticket.css" />
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
                  <a class="dropdown-item" href="uchangepassword.php">
                    Change Password
                  </a>
                  <a class="dropdown-item" href="usettings.php">Settings</a>
                  <a class="dropdown-item" href="Login.php">Logout</a>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </section>
    <section id="seatselection">
      <div>
        <table>
          <tr>
            <td>
              <div class="selection p-l-55 p-r-55 p-t-65 p-b-50">
                <form action="#" class="selection-form">
                  <span class="selection-form-title">Select Ticket</span>
                  <br />
                  <br />
                  <table>
                    <tr>
                      <td>
                        <div class="seat-body " onclick="changeBG(this)">
                          <span>A1</span>
                          <span class="seat-handle-left"></span>
                          <span class="seat-handle-right"></span>
                          <span class="seat-bottom"></span>
                        </div>
                      </td>
                      <td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</td>
                      <td>
                        <div class="seat-body" onclick="changeBG(this)">
                          <span>A2</span>
                          <span class="seat-handle-left"></span>
                          <span class="seat-handle-right"></span>
                          <span class="seat-bottom"></span>
                        </div>
                      </td>
                      <td>
                        <div class="seat-body" onclick="changeBG(this)">
                          <span>A3</span>
                          <span class="seat-handle-left"></span>
                          <span class="seat-handle-right"></span>
                          <span class="seat-bottom"></span>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="seat-body" onclick="changeBG(this)">
                          <span>B1</span>
                          <span class="seat-handle-left"></span>
                          <span class="seat-handle-right"></span>
                          <span class="seat-bottom"></span>
                        </div>
                      </td>
                      <td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</td>
                      <td>
                        <div class="seat-body" onclick="changeBG(this)">
                          <span>B2</span>
                          <span class="seat-handle-left"></span>
                          <span class="seat-handle-right"></span>
                          <span class="seat-bottom"></span>
                        </div>
                      </td>
                      <td>
                        <div class="seat-body" onclick="changeBG(this)">
                          <span>B3</span>
                          <span class="seat-handle-left"></span>
                          <span class="seat-handle-right"></span>
                          <span class="seat-bottom"></span>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="seat-body" onclick="changeBG(this)">
                          <span>C1</span>
                          <span class="seat-handle-left"></span>
                          <span class="seat-handle-right"></span>
                          <span class="seat-bottom"></span>
                        </div>
                      </td>
                      <td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</td>
                      <td>
                        <div class="seat-body" onclick="changeBG(this)">
                          <span>C2</span>
                          <span class="seat-handle-left"></span>
                          <span class="seat-handle-right"></span>
                          <span class="seat-bottom"></span>
                        </div>
                      </td>
                      <td>
                        <div class="seat-body" onclick="changeBG(this)">
                          <span>C3</span>
                          <span class="seat-handle-left"></span>
                          <span class="seat-handle-right"></span>
                          <span class="seat-bottom"></span>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="seat-body" onclick="changeBG(this)">
                          <span>D1</span>
                          <span class="seat-handle-left"></span>
                          <span class="seat-handle-right"></span>
                          <span class="seat-bottom"></span>
                        </div>
                      </td>
                      <td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</td>
                      <td>
                        <div class="seat-body" onclick="changeBG(this)">
                          <span>D2</span>
                          <span class="seat-handle-left"></span>
                          <span class="seat-handle-right"></span>
                          <span class="seat-bottom"></span>
                        </div>
                      </td>
                      <td>
                        <div class="seat-body" onclick="changeBG(this)">
                          <span>D3</span>
                          <span class="seat-handle-left"></span>
                          <span class="seat-handle-right"></span>
                          <span class="seat-bottom"></span>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="seat-body" onclick="changeBG(this)">
                          <span>E1</span>
                          <span class="seat-handle-left"></span>
                          <span class="seat-handle-right"></span>
                          <span class="seat-bottom"></span>
                        </div>
                      </td>
                      <td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</td>
                      <td>
                        <div class="seat-body" onclick="changeBG(this)">
                          <span>E2</span>
                          <span class="seat-handle-left"></span>
                          <span class="seat-handle-right"></span>
                          <span class="seat-bottom"></span>
                        </div>
                      </td>
                      <td>
                        <div class="seat-body" onclick="changeBG(this)">
                          <span>E3</span>
                          <span class="seat-handle-left"></span>
                          <span class="seat-handle-right"></span>
                          <span class="seat-bottom"></span>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="seat-body" onclick="changeBG(this)">
                          <span>F1</span>
                          <span class="seat-handle-left"></span>
                          <span class="seat-handle-right"></span>
                          <span class="seat-bottom"></span>
                        </div>
                      </td>
                      <td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</td>
                      <td>
                        <div class="seat-body" onclick="changeBG(this)">
                          <span>F2</span>
                          <span class="seat-handle-left"></span>
                          <span class="seat-handle-right"></span>
                          <span class="seat-bottom"></span>
                        </div>
                      </td>
                      <td>
                        <div class="seat-body" onclick="changeBG(this)">
                          <span>F3</span>
                          <span class="seat-handle-left"></span>
                          <span class="seat-handle-right"></span>
                          <span class="seat-bottom"></span>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="seat-body" onclick="changeBG(this)">
                          <span>G1</span>
                          <span class="seat-handle-left"></span>
                          <span class="seat-handle-right"></span>
                          <span class="seat-bottom"></span>
                        </div>
                      </td>
                      <td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</td>
                      <td>
                        <div class="seat-body" onclick="changeBG(this)">
                          <span>G2</span>
                          <span class="seat-handle-left"></span>
                          <span class="seat-handle-right"></span>
                          <span class="seat-bottom"></span>
                        </div>
                      </td>
                      <td>
                        <div class="seat-body" onclick="changeBG(this)">
                          <span>G3</span>
                          <span class="seat-handle-left"></span>
                          <span class="seat-handle-right"></span>
                          <span class="seat-bottom"></span>
                        </div>
                      </td>
                    </tr>
                  </table>
                </form>
              </div>
            </td>
            <td>
              <div class="seatdetails p-l-55 p-r-55 p-t-65 p-b-50">
                <form action="upayment.php" class="seatdetails-form">
                  <span class="seatdetails-form-title">Seat Details</span>
                  <br />
                  <br />
                  <div style="margin-left: 115px;">
                    <table style="width: 80%;" class="seatdetails-table">
                      <tr style="text-align: center;" class="seatdetails-table">
                        <td class="seatdetails-table seatdetails-input">
                          Class
                        </td>
                        <td class="seatdetails-table seatdetails-input">
                          Business
                        </td>
                      </tr>
                      <tr style="text-align: center;" class="seatdetails-table">
                        <td class="seatdetails-table seatdetails-input">
                          Seats
                        </td>
                        <td class="seatdetails-table seatdetails-input">A1</td>
                      </tr>
                      <tr style="text-align: center;" class="seatdetails-table">
                        <td class="seatdetails-table seatdetails-input">
                          Total
                        </td>
                        <td class="seatdetails-table seatdetails-input">
                          3500
                        </td>
                      </tr>
                    </table>
                  </div>
                  <button class="seatdetails-form-btn">Continue</button>
                </form>
              </div>
            </td>
          </tr>
        </table>
      </div>
    </section>
  </body>
  <script>
    function changeBG(th) {
      $(th).toggleClass("red");
    }
  </script>
</html>
