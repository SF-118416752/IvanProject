 <?php?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: grey;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: grey;
  color: black;
}

.active {
  background-color: black;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}

body {
  background: url("img/background4.jpg");
  background-size: 100%
}
img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}

</style>
        <meta charset="UTF-8"  />
        <title></title>
        <link rel="stylesheet" href="styleSheet.css">
    </head>
    

     
        <div class="topnav" id="myTopnav">
  <a href="#home" class="active">Home</a>
  <a href="index.html">CV</a>
  <a href="tiltedpage_scroll_demo.html">Interests</a>
  <a href="Consulting.php">Consulting Services</a>
 
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>

<img src="img/ucc.jpg" alt="UCC" height="300" width="400" class="center">
<h3>Stephen Fox</h3>
<h3>Student Number: 118416752</h3>

<a href="https://github.com/SF-118416752/PhpProject2">Github</a>
<br/>
<a href="https://sf-phpproject1.herokuapp.com/">https://sf-phpproject1.herokuapp.com/</a>



<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>


