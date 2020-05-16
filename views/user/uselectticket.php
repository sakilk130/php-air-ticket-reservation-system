<?php
require_once '../../controllers/user/uSelectTicketController.php'; 
$id=$_GET['id'];
$flightinfo=getflightInfo($id);
$ticketinfo=getTicketInfo($id);
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
   <form method="post" action="">
   <section class="clearfix">
     <table>
       <tr>
         
      <td style="padding-left: 200px;">
      <div class="payment p-l-55 p-r-55 p-t-65 p-b-50" style="text-align: center;">
      <span class="payment-form-title">Select Seat</span>
      <br>
      <br>
        <table>
          <?php

          echo "<tr>";
          echo "<td style='padding-left: 70px;'>";
          if($ticketinfo['sseat']=="A1")
          {
            echo "<div class='sseatbody' id='seata1'>";
            echo "A1";
            echo "</div>";
            echo "<script> 
            var element = document.getElementById('seata1');
            element.classList.remove('sseatbody');
            element.classList.add('booked');
            </script>";
          }
          else
          {
           echo' <div class="sseatbody">
            A1
            <input type="checkbox" name="A1" value="A1">
            </div>';
            
          }
          echo "</td>";
          echo "<td>";
          if($ticketinfo['sseat']=="A2")
          {
            echo "<div class='sseatbody' id='seata2'>";
            echo "A2";
            echo "</div>";
            echo "<script> 
            var element = document.getElementById('seata2');
            element.classList.remove('sseatbody');
            element.classList.add('booked');
            </script>";
          }
          else
          {
           echo' <div class="sseatbody">
            A2
            <input type="checkbox" name="A2" value="A2">
            </div>';
          }
          echo "</td>";
          echo "<td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</td>";
          echo "<td>";
          if($ticketinfo['sseat']=="A3")
          {
            echo "<div class='sseatbody' id='seata3'>";
            echo "A3";
            echo "</div>";
            echo "<script>
            var element=document.getElementById('seata3');
            element.classList.remove('sseatbody');
            element.classList.add('booked');
            </script>";
          }
          else
          {
            echo' <div class="sseatbody">
            A3
            <input type="checkbox" name="A3" value="A3">
            </div>';
          }
          echo "</td>";
          echo "<td>";
          if($ticketinfo['sseat']=="A4")
          {
            echo "<div class='sseatbody' id='seata4'>";
            echo "A4";
            echo "</div>";
            echo "<script>
            var element=document.getElementById('seata4');
            element.classList.remove('sseatbody');
            element.classList.add('booked');
            </script>";
          }
          else
          {
            echo' <div class="sseatbody">
            A4
            <input type="checkbox" name="A4" value="A4">
            </div>';
          }
          echo "</td>";
          echo "</tr>";

          echo "<tr>";
          echo "<td style='padding-left: 70px;'>";
          if($ticketinfo['sseat']=="B1")
          {
            echo "<div class='sseatbody' id='seatb1'>";
            echo "B1";
            echo "</div>";
            echo "<script> 
            var element = document.getElementById('seatb1');
            element.classList.remove('sseatbody');
            element.classList.add('booked');
            </script>";
          }
          else
          {
           echo' <div class="sseatbody">
            B1
            <input type="checkbox" name="B1" value="B1">
            </div>';
            
          }
          echo "</td>";
          echo "<td>";
          if($ticketinfo['sseat']=="B2")
          {
            echo "<div class='sseatbody' id='seatb2'>";
            echo "B2";
            echo "</div>";
            echo "<script> 
            var element = document.getElementById('seata2');
            element.classList.remove('sseatbody');
            element.classList.add('booked');
            </script>";
          }
          else
          {
           echo' <div class="sseatbody">
            B2
            <input type="checkbox" name="B2" value="B2">
            </div>';
          }
          echo "</td>";
          echo "<td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</td>";
          echo "<td>";
          if($ticketinfo['sseat']=="B3")
          {
            echo "<div class='sseatbody' id='seatb3'>";
            echo "B3";
            echo "</div>";
            echo "<script>
            var element=document.getElementById('seatb3');
            element.classList.remove('sseatbody');
            element.classList.add('booked');
            </script>";
          }
          else
          {
            echo' <div class="sseatbody">
            B3
            <input type="checkbox" name="B3" value="B3">
            </div>';
          }
          echo "</td>";
          echo "<td>";
          if($ticketinfo['sseat']=="B4")
          {
            echo "<div class='sseatbody' id='seatb4'>";
            echo "B4";
            echo "</div>";
            echo "<script>
            var element=document.getElementById('seatb4');
            element.classList.remove('sseatbody');
            element.classList.add('booked');
            </script>";
          }
          else
          {
            echo' <div class="sseatbody">
            B4
            <input type="checkbox" name="B4" value="B4">
            </div>';
          }
          echo "</td>";
          echo "</tr>";


          echo "<tr>";
          echo "<td style='padding-left: 70px;'>";
          if($ticketinfo['sseat']=="C1")
          {
            echo "<div class='sseatbody' id='seatc1'>";
            echo "C1";
            echo "</div>";
            echo "<script> 
            var element = document.getElementById('seatc1');
            element.classList.remove('sseatbody');
            element.classList.add('booked');
            </script>";
          }
          else
          {
           echo' <div class="sseatbody">
            C1
            <input type="checkbox" name="C1" value="C1">
            </div>';
            
          }
          echo "</td>";
          echo "<td>";
          if($ticketinfo['sseat']=="C2")
          {
            echo "<div class='sseatbody' id='seatc2'>";
            echo "C2";
            echo "</div>";
            echo "<script> 
            var element = document.getElementById('seatc2');
            element.classList.remove('sseatbody');
            element.classList.add('booked');
            </script>";
          }
          else
          {
           echo' <div class="sseatbody">
            C2
            <input type="checkbox" name="C2" value="C2">
            </div>';
          }
          echo "</td>";
          echo "<td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</td>";
          echo "<td>";
          if($ticketinfo['sseat']=="C3")
          {
            echo "<div class='sseatbody' id='seatc3'>";
            echo "C3";
            echo "</div>";
            echo "<script>
            var element=document.getElementById('seatc3');
            element.classList.remove('sseatbody');
            element.classList.add('booked');
            </script>";
          }
          else
          {
            echo' <div class="sseatbody">
            C3
            <input type="checkbox" name="C3" value="C3">
            </div>';
          }
          echo "</td>";
          echo "<td>";
          if($ticketinfo['sseat']=="C4")
          {
            echo "<div class='sseatbody' id='seatc4'>";
            echo "C4";
            echo "</div>";
            echo "<script>
            var element=document.getElementById('seatc4');
            element.classList.remove('sseatbody');
            element.classList.add('booked');
            </script>";
          }
          else
          {
            echo' <div class="sseatbody">
            C4
            <input type="checkbox" name="C4" value="C4">
            </div>';
          }
          echo "</td>";
          echo "</tr>";

          echo "<tr>";
          echo "<td style='padding-left: 70px;'>";
          if($ticketinfo['sseat']=="D1")
          {
            echo "<div class='sseatbody' id='seatd1'>";
            echo "D1";
            echo "</div>";
            echo "<script> 
            var element = document.getElementById('seatd1');
            element.classList.remove('sseatbody');
            element.classList.add('booked');
            </script>";
          }
          else
          {
           echo' <div class="sseatbody">
            D1
            <input type="checkbox" name="D1" value="D1">
            </div>';
            
          }
          echo "</td>";
          echo "<td>";
          if($ticketinfo['sseat']=="D2")
          {
            echo "<div class='sseatbody' id='seatd2'>";
            echo "D2";
            echo "</div>";
            echo "<script> 
            var element = document.getElementById('seatd2');
            element.classList.remove('sseatbody');
            element.classList.add('booked');
            </script>";
          }
          else
          {
           echo' <div class="sseatbody">
            D2
            <input type="checkbox" name="D2" value="D2">
            </div>';
          }
          echo "</td>";
          echo "<td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</td>";
          echo "<td>";
          if($ticketinfo['sseat']=="D3")
          {
            echo "<div class='sseatbody' id='seatd3'>";
            echo "D3";
            echo "</div>";
            echo "<script>
            var element=document.getElementById('seatd3');
            element.classList.remove('sseatbody');
            element.classList.add('booked');
            </script>";
          }
          else
          {
            echo' <div class="sseatbody">
            D3
            <input type="checkbox" name="D3" value="D3">
            </div>';
          }
          echo "</td>";
          echo "<td>";
          if($ticketinfo['sseat']=="D4")
          {
            echo "<div class='sseatbody' id='seatd4'>";
            echo "D4";
            echo "</div>";
            echo "<script>
            var element=document.getElementById('seatd4');
            element.classList.remove('sseatbody');
            element.classList.add('booked');
            </script>";
          }
          else
          {
            echo' <div class="sseatbody">
            D4
            <input type="checkbox" name="D4" value="D4">
            </div>';
          }
          echo "</td>";
          echo "</tr>";

          ?>
          <input type="hidden" name="id" value="<?php echo $flightinfo["fid"]?>" >
         
        </table>
        </div>
        </td>
        <td style="padding-left: 100px;">
      <div>
        <div class="payment p-l-55 p-r-55 p-t-65 p-b-50">
            <span class="payment-form-title">Pay With bKash</span>
            <img src="../../image/bKash.png" alt="" class="bimage" />
            <input
              class="payment-input2"
              type="text"
              name="pnum"
              id=""
              value="<?php echo $pnum; ?>"
              placeholder="Phone Number"
            />
            <br>
            <span style="color:red"><?php echo $err_pnum; ?></span><br>
            <span style="color:red"><?php echo $err_A1; ?></span>
            <input type="submit" class="payment-form-btn" name="payNow" value="Pay Now">
        </div>
      </div>
      </td>
      </tr>
     </table>
      </section>
    </form>
  </body>
</html>

