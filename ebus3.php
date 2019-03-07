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
        <?php 
        
        session_start(); 
        $totalValue = $_POST['txtTotal'];
        echo "The name is :".$fullNameValue.".";
        echo "<br></br>";
        
        echo "the total value is ".$totalValue.".";
        ?> 
        
    </body> 
</html>


