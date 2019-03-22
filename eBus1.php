<!--Creating a session variable and assigning it to txtTotal -->
<?php
session_start();
$totalValue = "";
$_SESSION['txtTotal'] = $totalValue;
?>
<!DOCTYPE html>
<html lang="en" xmins="https.//www.w3.org/1999/xhtml"
    <head>
          <meta charset="utf-8" />
          <title> Ebusiness 1</title>
          <link rel="stylesheet" href="style.css" type="text/css" />
          <style>
              body {
  background-color: hsla(89, 43%, 51%, 0.3);
}

 * {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 33.33%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}
              </style>
    </head>
    <body>
         <button onclick="goBack()">Go Back</button>



<script>
function goBack() {
  window.history.back();
}
</script>


        <div class="form">
            <form name="intCalc" method="post" action="eBus2.php">
                  <h1>Consulting Services</h1>
                <hr />
                <center>
                    <table cellspacing="10">
                        <tr>
                            <td><b>Select a Consulting Service:</b></td>
                        </tr>
                         <tr>
                            <td>Blockchain @ $1000</td>
                            <td><input type="radio" id="Blockchain" name="rdoGroup" value="1000" /></td>
                        </tr>
                        <tr>
                            <td>Autonomous Things @ $2000</td>
                            <td><input type="radio" id="Autonomousthings" name="rdoGroup" value="2000" /></td>
                        </tr>
                        <tr>
                            <td>Immersive Experience @ $3000</td>
                            <td><input type="radio" id="Immersiveexperience" name="rdoGroup" value="3000" /></td>
                        </tr>
                    </table>
                </center>
                <br />
               
                <center>
                    <table cellspacing="10">
                        <tr>
                            <td><b></b></td>
                              <td><b>Amount</b></td>
                        </tr>
                        <tr>
                            <td>Sub Total</td>
                            <td><input type="text" id="txtSubTot" name="txtSub" readonly /></td>
                        </tr>
                        <tr>
                            <td>Discount @ 30%</td>
                            <td><input type="text" id="txtDisc" name="txtDisc" readonly /></td>
                        </tr>
                        <tr>
                            <td>+VAT @ 40%</td>
                            <td><input type="text" id="txtVat" name="txtVat" readonly /></td>
                        </tr>
                        <tr>
                            <td>Total</td>
                            <td><input type="text" id="txtTotal" name="txtTotal" value="" readonly /></td>
                        </tr>
                    </table>
                </center>
                <br />
                <center>
                    <input type="button" name="btnCalc" id="btnCalc" onclick="calcSub()" value="Calculate Amount" />
                    <input type="button" name="btnClear" id="btnClear" onclick="AmountClear()" value="Clear" />
                    <input type="submit" name="btnProceed" id="btnProceed" onclick="" value="Proceed" />
                </center>
            </form>
        </div>
       
        <script type="text/javascript">
            function calcSub() {
                //Assigning variables to the values
                var subAmount = parseFloat(document.getElementById('txtSubTot').value);
                var Blockchain = parseFloat(document.getElementById('Blockchain').value);
                var Autonomousthings = parseFloat(document.getElementById('Autonomousthings').value);
                var Immersiveexperience = parseFloat(document.getElementById('Immersiveexperience').value);
               
                //If radio buttons are clicked, values are assigned
                if (document.getElementById('Blockchain').checked) {
                    document.intCalc.txtSubTot.value = Blockchain;
                    subAmount = Blockchain;
                    calculation(subAmount);
                }
                else if (document.getElementById('Autonomousthings').checked) {
                    document.intCalc.txtSubTot.value = Autonomousthings;
                    subAmount = Autonomousthings;
                    calculation(subAmount);
            }
            else if (document.getElementById('Immersiveexperience').checked) {
                    document.intCalc.txtSubTot.value = Immersiveexperience;
                    subAmount = Immersiveexperience;
                    calculation(subAmount);
                }
            }
           
            //Function for calculating  the values
            function calculation(parmSTotal) {
                var subTotal = parseFloat(parmSTotal);
                var discCalc = parseFloat(subTotal * .10);
                var vatCalc = parseFloat(subTotal * .20);
                var total = parseFloat(subTotal - discCalc + vatCalc);
               
                //Inserting them into the correct fields
                document.intCalc.txtDisc.value = discCalc;
                document.intCalc.txtVat.value = vatCalc;
                document.intCalc.txtTotal.value = total;
            }
           
            function AmountClear() {
                document.getElementById('txtSubTot').value ="";
                document.getElementById('txtDisc').value ="";
                document.getElementById('txtVat').value ="";
                document.getElementById('txtTotal').value ="";
            }
           
        </script>
    </body>
</html> 
                            
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
































