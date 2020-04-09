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
                      <button id="myBtn1" class="seat-body" value="A1" onclick='changeBG1(this)'>A1</button>
                      </td>
                      <td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</td>
                      <td>
                      <button id="myBtn2" class="seat-body" value="A2" onclick='changeBG2(this)'>A2</button>
                      <td>
                      <button id="myBtn3" class="seat-body" value="A3" onclick='changeBG3(this)'>A3</button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                      <button id="myBtn4" class="seat-body" value="B1" onclick="changeBG3(this)">B1</button>
                      </td>
                      <td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</td>
                      <td>
                      <button id="myBtn5" class="seat-body" value="B2" onclick="changeBG4(this)">B2</button>
                      </td>
                      <td>
                      <button id="myBtn6" class="seat-body" value="B3" onclick="changeBG5(this)">B3</button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                      <button id="myBtn7" class="seat-body" value="C1" onclick="changeBG6(this)">C1</button>
                      </td>
                      <td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</td>
                      <td>
                      <button id="myBtn8" class="seat-body" value="C2" onclick="changeBG7(this)">C2</button>
                      </td>
                      <td>
                      <button id="myBtn9" class="seat-body" value="C3" onclick="changeBG8(this)">C3</button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                      <button id="myBtn10" class="seat-body" value="D1" onclick="changeBG9(this)">D1</button>
                      </td>
                      <td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</td>
                      <td>
                      <button id="myBtn11" class="seat-body" value="D2" onclick="changeBG10(this)">D2</button>
                      </td>
                      <td>
                      <button id="myBtn12" class="seat-body" value="D3" onclick="changeBG11(this)">D3</button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                      <button id="myBtn13" class="seat-body" value="E1" onclick="changeBG12(this)">E1</button>
                      </td>
                      <td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</td>
                      <td>
                      <button id="myBtn14" class="seat-body" value="E2" onclick="changeBG13(this)">E2</button>
                      </td>
                      <td>
                      <button id="myBtn15" class="seat-body" value="E3" onclick="changeBG14(this)">E3</button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                      <button id="myBtn16" class="seat-body" value="F1" onclick="changeBG15(this)">F1</button>
                      </button>
                      <td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</td>
                      <td>
                      <button id="myBtn17" class="seat-body" value="F2" onclick="changeBG16(this)">F2</button>
                      </td>
                      <td>
                      <button id="myBtn18" class="seat-body" value="F3" onclick="changeBG17(this)">F3</button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                      <button id="myBtn19" class="seat-body" value="G1" onclick="changeBG18(this)">G1</button>
                      </td>
                      <td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</td>
                      <td>
                      <button id="myBtn20" class="seat-body" value="G2" onclick="changeBG19(this)">G2</button>
                      </td>
                      <td>
                      <button id="myBtn21" class="seat-body" value="G3" onclick="changeBG20(this)">G3</button>
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
                        <td class="seatdetails-table seatdetails-input" id="seatClass">
                        </td>
                      </tr>
                      <tr style="text-align: center;" class="seatdetails-table">
                        <td class="seatdetails-table seatdetails-input">
                          Seats
                        </td>
                        <td class="seatdetails-table seatdetails-input" id="demo"></td>
                      </tr>
                      <tr style="text-align: center;" class="seatdetails-table">
                        <td class="seatdetails-table seatdetails-input">
                          Total
                        </td>
                        <td class="seatdetails-table seatdetails-input" id="total">
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
    function changeBG1(th) {
      $(th).toggleClass("red");
      var x = document.getElementById("myBtn1").value;
      var y=3500;
      var z="Business";
      document.getElementById("demo").innerHTML = x;
      document.getElementById("total").innerHTML=y;
      document.getElementById("seatClass").innerHTML=z;
    }
    function changeBG2(th) {
      $(th).toggleClass("red");
      var x = document.getElementById("myBtn2").value;
      var y=2500;
      var z="Normal";
      document.getElementById("demo").innerHTML = x;
      document.getElementById("total").innerHTML=y;
      document.getElementById("seatClass").innerHTML=z;
    }
    function changeBG3(th) {
      $(th).toggleClass("red");
      var x = document.getElementById("myBtn3").value;
      var y=2500;
      var z="Normal";
      document.getElementById("demo").innerHTML = x;
      document.getElementById("total").innerHTML=y;
      document.getElementById("seatClass").innerHTML=z;
    }
    function changeBG4(th) {
      $(th).toggleClass("red");
      var x = document.getElementById("myBtn4").value;
      var y=3500;
      var z="Business";
      document.getElementById("demo").innerHTML = x;
      document.getElementById("total").innerHTML=y;
      document.getElementById("seatClass").innerHTML=z;
    }
  </script>
</html>
