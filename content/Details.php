<html>
<head>
<style>
    img{
     width:100px;
     height:100px;
     border-radius:50%;
    }
    fieldset{
        width:800px;
        height:150px;
        margin:auto;
    }
    body {
        background-image:url('wood8.jpg');
  background-repeat: no-repeat;
 
 background-position: center; 
background-size: 100%;
  
} 
fieldset{
    background-image: url('back.webp');
    
}
legend{
    background-image: url('back.webp');
}
.container{
    display:flex;
    margin:auto;
}
.contain1{
    margin-left:50px;
}
.contain2{
    display:flex;
    margin-left:100px;
}
.contain3{
    display:flex;
    margin-left:100px;
}
.contain4{
    display:flex;
    margin-left:100px;
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

<form  method="post">
    
<div class="topnav">
<img src="pebble.png"></img>
<a href="dashboard.html">LogOut</a>
<a href="Contactus.html">ContactUs</a>
</div>
  <br>
  <br>
  <br>
  <br>
  <br>  
<fieldset>

<legend align="center">PICK YOUR CITY</legend>
<center>
    <div class="container">
<div class="contain1">
<a href="Pune.php">
<img src="Pune.jpg"> 
<br>
<label>Pune</label>
</a>
</div>
 
<div class="contain2">
<a href="Lucknow.php">
    <img src="Lucknow.jpg"> 
    <br>
    <label>Lucknow</label>
</div>


<div class="contain3">
<a href="Bengaluru.php">
    <img src="banglore.jpg"> 
    <br>
    <label>Bengaluru</label>
</a>
</div>


<div class="contain4">
<a href="Mumbai.php">
    <img src="Mumbai.jpg"> 
    <br>
    <label>Mumbai</label>
</a>
</div>
</center>
</fieldset>
</form>

</body>
</html>
