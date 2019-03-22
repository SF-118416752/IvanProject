<!DOCTYPE html> 
<html>
    <head>
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
        <!-- //Starting the session to get the session variable from last page--> 
    <center>
        <h1>Purhase Receipt</h1>
        <?php 
        
        session_start(); 
        $totalValue = $_POST['txtTotal'];
        $fullNameValue = $_POST['txtName'];
        $Number = $_POST['txtNum'];
        echo "Name:".$fullNameValue.".";
        echo "<br></br>";    
        echo "Total Price: $".$totalValue.".";     
        echo "<br></br>";
        echo "Phone Number: ".$Number.".";
        
        
        
        ?> 
    </center>
    </body> 
</html>


