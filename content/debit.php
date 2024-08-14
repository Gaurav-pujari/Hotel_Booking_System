<html>
<head>
<style>
body{
background-color:#336B87;
}
fieldset{
background-color:#eeeeee;
height:30%;
width:35%;
margin:auto;
}
legend
{
text-align:center;
background-color:#eeeeee;
color:red;
}
legend{
color:white;
background-color:red;
}

.topnav {
  overflow: hidden;
  margin-top:-8px;
}
.topnav img{
width:250px;
height:47px;
}
.topnav a {
  float: right;
  color: #f2f2f2;
  text-align:left;
  padding: 14px 16px;
  text-decoration:none;
  font-size: 17px;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}
.topnav img{
width:170px;
height:50px;
}

.topnav{
background-color:black;
}
 
</style>
</head>
<body>
<form action="success.html" method="post">
<div class="topnav">
<img src="pebble.png"></img>
<a href="dashboard.html">LogOut</a>
<a href="Contactus.html">ContactUs</a>
</div>
<br>
<br>
<fieldset>

<legend>Payment</legend>
<center>
<?php
$total=$_COOKIE['tamount'];
echo"Payable Amount :",$total;
?>
<br>
<br>
<label>Enter Card Name:</label>
<input type="text" name="cn">
<br>
<br>
<label>Enter Debit/Credit number:</label>
<input type="number" name="db">
<br>
<br>
<label> Enter C.V.V:</label>
<input type="number" name="cv">
<br>
<br>
<input type="submit" name="submit">
</center>
</fieldset>
</form>
</body>
</html>

