<?php
require '../../controllers/user/uPaymentController.php';
?>
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
 
    <?php
      include("navbar.php"); 
    ?>
    <section id="payment">
      <div>
        <div class="payment p-l-55 p-r-55 p-t-65 p-b-50">
          <form action="" class="payment-form" method="post">
            <span class="payment-form-title">Pay With bKash</span>
            <img src="../../image/bKash.png" alt="" class="bimage" />
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
              name="pnum"
              id=""
              value="<?php echo $pnum; ?>"
              placeholder="Phone Number"
            />
            <br>
            <span style="color:red"><?php echo $err_pnum; ?></span>
            <input type="submit" class="payment-form-btn" name="submit" value="Pay Now">
          </form>
        </div>
      </div>
    </section>
  </body>
</html>
