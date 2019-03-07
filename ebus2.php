<?php
session_start();
$fullNameValue = "";
$totalValue = "";
/*
 * Creat a session variable for th e mobile number
 */
$totalValue = $_POST['txtTotal'];
$_SESSION['txtName'] = $fullNameValue;
$_SESSION['txtTotal'] = $totalValue;
/**
 * Allocate the mobile number session variable to a text box.
 */

?>

<!DOCTYPE html>
<html>
    <head>
        <title>eBusiness2</title>
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
        <div class="form">
            <form name="Details" method="post" action="eBus3.php">
                <center>
                    <table cellspacing="10">
                        <tr>
                            <td><b></b></td>
                            <td><b>Enter in your details below</b></td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td><input type="text" id="txtName" name="txtName" value="" /></td>
                        </tr>
                        <tr>
                            <td>Phone Number</td>
                            <td><input type="text" id="txtNum" name="txtNum" pattern="[0-9] {3}-[0-9]{3}-[0-9]{4}" 
                                       required>
                                <span class="note">format: 123-456-7890</span>                
                                       
                        </td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><input type="text" id="psw" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter and at least 8 or more characters" required></td>
                        </tr>
                        <tr>
                           
                            <td><input type="hidden" id="txtTotal" name="txtTotal" value="<?php echo $totalValue;?>" /></td>
                        </tr>
                    </table>
                </center>
                <center>
                <input type="submit" name="btnContinue" id="btnContinue" onclick="" value="Continue" />
                </center>
        </div>
            </form>
      
    </body>
</html>



