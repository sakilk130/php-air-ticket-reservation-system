<?php
require '../../controllers/user/uSelectTicketController.php';


?>
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
  <?php
   include("navbar.php"); 
   ?>
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
                      <button class="seat-body" value="A1" onclick="changeBG(this)">A1</button>
                        <!-- <div class="seat-body " onclick="changeBG(this)">
                          <span>A1</span>
                          <span class="seat-handle-left"></span>
                          <span class="seat-handle-right"></span>
                          <span class="seat-bottom"></span>
                        </div> -->
                      </td>
                      <td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</td>
                      <td>
                      <button class="seat-body" value="A2" onclick="changeBG(this)">A2</button>
                        <!-- <div class="seat-body" onclick="changeBG(this)">
                          <span>A2</span>
                          <span class="seat-handle-left"></span>
                          <span class="seat-handle-right"></span>
                          <span class="seat-bottom"></span>
                        </div>
                      </td> -->
                      <td>
                      <button class="seat-body" value="A3" onclick="changeBG(this)">A3</button>
                        <!-- <div class="seat-body" onclick="changeBG(this)">
                          <span>A3</span>
                          <span class="seat-handle-left"></span>
                          <span class="seat-handle-right"></span>
                          <span class="seat-bottom"></span>
                        </div> -->
                      </td>
                    </tr>
                    <tr>
                      <td>
                      <button class="seat-body" value="B1" onclick="changeBG(this)">B1</button>
                        <!-- <div class="seat-body" onclick="changeBG(this)">
                          <span>B1</span>
                          <span class="seat-handle-left"></span>
                          <span class="seat-handle-right"></span>
                          <span class="seat-bottom"></span>
                        </div> -->
                      </td>
                      <td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</td>
                      <td>
                      <button class="seat-body" value="B2" onclick="changeBG(this)">B2</button>
                        <!-- <div class="seat-body" onclick="changeBG(this)">
                          <span>B2</span>
                          <span class="seat-handle-left"></span>
                          <span class="seat-handle-right"></span>
                          <span class="seat-bottom"></span>
                        </div> -->
                      </td>
                      <td>
                      <button class="seat-body" value="B3" onclick="changeBG(this)">B3</button>
                        <!-- <div class="seat-body" onclick="changeBG(this)">
                          <span>B3</span>
                          <span class="seat-handle-left"></span>
                          <span class="seat-handle-right"></span>
                          <span class="seat-bottom"></span>
                        </div> -->
                      </td>
                    </tr>
                    <tr>
                      <td>
                      <button class="seat-body" value="C1" onclick="changeBG(this)">C1</button>
                        <!-- <div class="seat-body" onclick="changeBG(this)">
                          <span>C1</span>
                          <span class="seat-handle-left"></span>
                          <span class="seat-handle-right"></span>
                          <span class="seat-bottom"></span>
                        </div> -->
                      </td>
                      <td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</td>
                      <td>
                      <button class="seat-body" value="C2" onclick="changeBG(this)">C2</button>
                        <!-- <div class="seat-body" onclick="changeBG(this)">
                          <span>C2</span>
                          <span class="seat-handle-left"></span>
                          <span class="seat-handle-right"></span>
                          <span class="seat-bottom"></span>
                        </div> -->
                      </td>
                      <td>
                      <button class="seat-body" value="C3" onclick="changeBG(this)">C3</button>
                        <!-- <div class="seat-body" onclick="changeBG(this)">
                          <span>C3</span>
                          <span class="seat-handle-left"></span>
                          <span class="seat-handle-right"></span>
                          <span class="seat-bottom"></span>
                        </div> -->
                      </td>
                    </tr>
                    <tr>
                      <td>
                      <button class="seat-body" value="D1" onclick="changeBG(this)">D1</button>
                        <!-- <div class="seat-body" onclick="changeBG(this)">
                          <span>D1</span>
                          <span class="seat-handle-left"></span>
                          <span class="seat-handle-right"></span>
                          <span class="seat-bottom"></span>
                        </div> -->
                      </td>
                      <td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</td>
                      <td>
                      <button class="seat-body" value="D2" onclick="changeBG(this)">D2</button>
                        <!-- <div class="seat-body" onclick="changeBG(this)">
                          <span>D2</span>
                          <span class="seat-handle-left"></span>
                          <span class="seat-handle-right"></span>
                          <span class="seat-bottom"></span>
                        </div> -->
                      </td>
                      <td>
                      <button class="seat-body" value="D3" onclick="changeBG(this)">D3</button>
                        <!-- <div class="seat-body" onclick="changeBG(this)">
                          <span>D3</span>
                          <span class="seat-handle-left"></span>
                          <span class="seat-handle-right"></span>
                          <span class="seat-bottom"></span>
                        </div> -->
                      </td>
                    </tr>
                    <tr>
                      <td>
                      <button class="seat-body" value="E1" onclick="changeBG(this)">E1</button>
                        <!-- <div class="seat-body" onclick="changeBG(this)">
                          <span>E1</span>
                          <span class="seat-handle-left"></span>
                          <span class="seat-handle-right"></span>
                          <span class="seat-bottom"></span>
                        </div> -->
                      </td>
                      <td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</td>
                      <td>
                      <button class="seat-body" value="E2" onclick="changeBG(this)">E2</button>
                        <!-- <div class="seat-body" onclick="changeBG(this)">
                          <span>E2</span>
                          <span class="seat-handle-left"></span>
                          <span class="seat-handle-right"></span>
                          <span class="seat-bottom"></span>
                        </div> -->
                      </td>
                      <td>
                      <button class="seat-body" value="E3" onclick="changeBG(this)">E3</button>
                        <!-- <div class="seat-body" onclick="changeBG(this)">
                          <span>E3</span>
                          <span class="seat-handle-left"></span>
                          <span class="seat-handle-right"></span>
                          <span class="seat-bottom"></span>
                        </div> -->
                      </td>
                    </tr>
                    <tr>
                      <td>
                      <button class="seat-body" value="F1" onclick="changeBG(this)">F1</button>
                        <!-- <div class="seat-body" onclick="changeBG(this)">
                          <span>F1</span>
                          <span class="seat-handle-left"></span>
                          <span class="seat-handle-right"></span>
                          <span class="seat-bottom"></span>
                        </div> -->
                      </td>
                      <td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</td>
                      <td>
                      <button class="seat-body" value="F2" onclick="changeBG(this)">F2</button>
                        <!-- <div class="seat-body" onclick="changeBG(this)">
                          <span>F2</span>
                          <span class="seat-handle-left"></span>
                          <span class="seat-handle-right"></span>
                          <span class="seat-bottom"></span>
                        </div> -->
                      </td>
                      <td>
                      <button class="seat-body" value="F3" onclick="changeBG(this)">F3</button>
                        <!-- <div class="seat-body" onclick="changeBG(this)">
                          <span>F3</span>
                          <span class="seat-handle-left"></span>
                          <span class="seat-handle-right"></span>
                          <span class="seat-bottom"></span>
                        </div> -->
                      </td>
                    </tr>
                    <tr>
                      <td>
                      <button class="seat-body" value="G1" onclick="changeBG(this)">G1</button>
                        <!-- <div class="seat-body" onclick="changeBG(this)">
                          <span>G1</span>
                          <span class="seat-handle-left"></span>
                          <span class="seat-handle-right"></span>
                          <span class="seat-bottom"></span>
                        </div> -->
                      </td>
                      <td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</td>
                      <td>
                      <button class="seat-body" value="G2" onclick="changeBG(this)">G2</button>
                        <!-- <div class="seat-body" onclick="changeBG(this)">
                          <span>G2</span>
                          <span class="seat-handle-left"></span>
                          <span class="seat-handle-right"></span>
                          <span class="seat-bottom"></span>
                        </div> -->
                      </td>
                      <td>
                      <button class="seat-body" value="G3" onclick="changeBG(this)">G3</button>
                        <!-- <div class="seat-body" onclick="changeBG(this)">
                          <span>G3</span>
                          <span class="seat-handle-left"></span>
                          <span class="seat-handle-right"></span>
                          <span class="seat-bottom"></span>
                        </div> -->
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
      var ss=$(th).toggleClass("red");
      console.log(ss);
    }
  </script>
</html>
