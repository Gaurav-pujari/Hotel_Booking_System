
<?php
$cookie_name="hotel";
$cookie_value="The_Leela_Palace_Bengaluru";
setcookie($cookie_name,$cookie_value,time()+3600);
?>
<html>
  <head>
    <style>

body {
  background-color:873240;
  
}  
 .card0 {
        width:  800px;
        height: 500px;
        background-color: yellow;
        margin-left:30px; 
        text-align: center;
         overflow:hidden;
        border:1px solid black;
        border-radius:30px;
      }
         .card1{
        width:  630px;
        height: 360px;
       
        margin-left:30px; 
        text-align: center;
         overflow:hidden;
        border:1px solid black;
        border-radius:25px;
      }
        
      .image-container {
        width: 2500px;
        background-color:pink;
        height: 300px;
        clear: both;
        position: relative;
        -webkit-transition: left 2s;
        -moz-transition: left 2s;
        -o-transition: left 2s;
        transition: left 2s;
         
      }
      .slide {
        float: left;
        margin: 0px;
        padding: 0px;
        position: relative;
      }
      #slide-1:target ~ .image-container {
        left: 0px;
      }
      #slide-2:target ~ .image-container {
        left: -800px;
      }
      #slide-3:target ~ .image-container {
        left: -1600px;
      }

      .buttons {
        position: relative;
        top: -20px;
      }
      .buttons a {
        display: inline-block;
        height: 15px;
        width: 15px;
        border-radius: 80px;
        background-color: lightgreen;
      }

      .container0{
      display:flex;
     
      }

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
  
  
}

li {
  float:left;
  margin-left:150px;
  
  
}

li a {
  display: block;
  color: white;
  text-align:center;
  padding: 14px 16px;
  text-decoration: none;
  
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #04AA6D;
}


.myDiv {
padding:10px 15px;
margin:20px;
border:10px solid;
border-style:ridge;
background-image: url('back.webp');

}
.myDiv1 {

height:1400px;
padding:10px 15px;
margin:20px;
border:10px solid;
border-style:ridge;
background-image: url('back.webp');


}
.myDiv2 {

height:1200px;
padding:10px 15px;
margin:20px;
border:10px solid;
border-style:ridge;
background-image: url('back.webp');


}

.myDiv3 {

height:250px;
padding:10px 15px;
margin:20px;
border:10px solid;
border-style:ridge;
background-image: url('back.webp');;



}

 .checked {
  color: orange;
}

.card00{
width:305px;
height:450px;
margin:left;
margin-left:20px;
border-radius:5px;
background-color:#eeeeee;
border:1px solid black;

}
.card11{
width:305px;
height:450px;
margin:auto;
margin-left:200px;
border-radius:5px;
background-color:#eeeeee;
border:1px solid black;

}
.card22{
width:305px;
height:450px;
margin:right;
margin-right:20px;
border-radius:5px;
background-color:#eeeeee;
border:1px solid black;
}
.card-group1{
display:flex;
}
.card-group2{
display:flex;
}
.checked {
  color: orange;
}



.image-box1 {
  width: 150px;
  height:200px;
  text-align: center;
  background: #E9E8E7;
  padding: 10px;
  -webkit-box-shadow: 2px 2px 5px 0px rgba(0, 0, 0, 0.75);
  -moz-box-shadow: 2px 2px 5px 0px rgba(0, 0, 0, 0.75);
  box-shadow: 2px 2px 5px 0px rgba(0, 0, 0, 0.75);
  border-radius: 5px 5px 5px 5px;
  -moz-border-radius: 5px 5px 5px 5px;
  -webkit-border-radius: 5px 5px 5px 5px;
}
.image-box2{
  width: 150px;
  height:200px;
  text-align: center;
  background: #E9E8E7;
  padding: 10px;
  -webkit-box-shadow: 2px 2px 5px 0px rgba(0, 0, 0, 0.75);
  -moz-box-shadow: 2px 2px 5px 0px rgba(0, 0, 0, 0.75);
  box-shadow: 2px 2px 5px 0px rgba(0, 0, 0, 0.75);
  border-radius: 5px 5px 5px 5px;
  -moz-border-radius: 5px 5px 5px 5px;
  -webkit-border-radius: 5px 5px 5px 5px;
}

.image-box3 {
  width: 150px;
  height:200px;
  text-align: center;
  background: #E9E8E7;
  padding: 10px;
  -webkit-box-shadow: 2px 2px 5px 0px rgba(0, 0, 0, 0.75);
  -moz-box-shadow: 2px 2px 5px 0px rgba(0, 0, 0, 0.75);
  box-shadow: 2px 2px 5px 0px rgba(0, 0, 0, 0.75);
  border-radius: 5px 5px 5px 5px;
  -moz-border-radius: 5px 5px 5px 5px;
  -webkit-border-radius: 5px 5px 5px 5px;
}
.image-box1 img {
  max-width:100%;
  height:140px;
  display: block;
  margin-bottom: 7px;
  border-radius:50%;
}
.image-box2 img {
  max-width:100%;
  height:140px;
  display: block;
  margin-bottom: 7px;
  border-radius:50%;
}
.image-box3 img {
  max-width:100%;
  height:140px;
  display: block;
  margin-bottom: 7px;
  border-radius:50%;
}

.images{
  display:flex;
  
  }
.image-box1{
  margin:left;
  margin-left:200px;
}
.image-box2{
  margin:auto;
}
.image-box3{
  margin:right;
  margin-right:200px;
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
<script>
  function toggleCheck(sibling) {
  var checkBox = sibling.parentNode.getElementsByTagName("input")[0];
  checkBox.checked = !checkBox.checked;
}
  </script>
</head>
<body>
<form action="detail.php" method="post">
<div class="topnav">
<img src="pebble.png"></img>
<a href="dashboard.html">LogOut</a>
<a href="Contactus.html">ContactUs</a>
</div>
<ul class="newstyle">
  
  <li><a class="active" href="#myDiv">Home</a></li>
  <li><a href="#about">About</a></li>
  <li><a href="#Rules"> Property Rules</a></li>
  <li><a href="#Facilities">Facilities</a></li>
  <li><a href="#Rooms">Rooms</a></li>
 
</ul>

<a name="myDiv">
<div class="myDiv">
<div  class="container0">

    <div class="card0">
      <span id="slide-1"></span>
      <span id="slide-2"></span>
      <span id="slide-3"></span>

      <div class="image-container">
        <img src="Leela.webp" class="slide" width="800px" height="500px" style=" border-radius:12px;"/>
        <img src="Leela4.webp" class="slide" width="800px" height="500px" style=" border-radius:12px;"/>
        <img src="Leela3.webp" class="slide" width="800px" height="500px"style=" border-radius:12px;" />
      </div>
      <div class="buttons">
        <a href="#slide-1"></a>
        <a href="#slide-2"></a>
        <a href="#slide-3"></a>
      </div>

    </div>
<div class="card1"style="background-color:#eeeeee;color:black;background-image: url('back.webp');">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.181411759184!2d77.64616271434524!3d12.960240690863351!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae14067cca9bdd%3A0x111bbe37cc24e71a!2sThe%20Leela%20Palace%20Bengaluru%20-%20Garden%20City&#39;s%20Only%20Modern%20Palace%20Hotel!5e0!3m2!1sen!2sin!4v1666175297520!5m2!1sen!2sin" width="650" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
 <center> <h2 class="card-title" style="font-style:italic;">LOCATION</h2></center>
  </div>
    </div>
 <h1 class="card-title" style="font-style:italic; margin-left:30px;">The Leela Palace Bengaluru </h1>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="card-text" style="display:flex;">

<div class="card-title" style="font-weight:bold; margin-left:30px; font-style:italic;">RATING:
<span class="fa fa-star checked" ></span>
<span class="fa fa-star checked"  ></span>
<span class="fa fa-star checked" ></span>
<span class="fa fa-star checked" ></span>
<span class="fa fa-star checked" ></span>
</div>
</div>
</div>
</div>
     

<div class="container1">
  <a name="about"></a>
<div class="myDiv">
<div class="overview">
  <h1 class="card-title" style="font-style:italic;">About The Leela Palace Bengaluru</h1>
<p class="card-text" style="font-weight:bold; font-size:20px; font-style:italic;">Close to Banglore International Airport, this premium property features comfortable rooms, multiple dining options, a full-service spa and a host of upscale amenities.</p>

<ul="circle">
<li style="font-size:20px;font-style:italic;">Rejuvenate your mind and body with holistic treatments at the on-site spa, Svahaa.</li><br><br>
<li style="font-size:20px;font-style:italic;">Enjoy the property's close proximity to Pune International Airport which is 3.7 km away.</li><br><br>
<li style="font-size:20px;font-style:italic;">Take a refreshing swim in the crystal-clear swimming pool.</li><br><br>
<li style="font-size:20px;font-style:italic;">Satiate your palate with Indian and global cuisines at the on-site restaurant, Aubergine.</li>
</ul><br><br><br>

<img src="food.jpg" style="width:50px;height:50px;border:1px solid black;">

<img src="location.jpg" style="width:50px;height:50px;border:1px solid black;">
<img src="run.jpg" style="width:50px;height:50px;border:1px solid black;">
<img src="bed.jpg" style="width:50px;height:50px;border:1px solid black;">
</div>
</div>
</div>

<div class="container2">
  <a name="Rules"></a>
<div class="myDiv1">
<h1 style="font-style:italic;">Property Rules</h1>
<p style="font-size:30px;font-style:italic;"> Check In:-2PM ||Check Out:-11AM</p>
<br>


<div class="rules">
<p class="r" style="display:flex;font-size:30px;font-style:italic;text-decoration:underline;"><img src="couple.jpg" width="60px" height="40px">
 Couple , Bachelors Rules</p>
<hr>
</div>
<ul="circle">
<li style="font-style:italic;font-size:23px;">Guests with fever are not allowed</li><br><br>
<li style="font-style:italic;font-size:23px;">Guests from containment zones are not allowed</li><br><br>
<li style="font-style:italic;font-size:23px;">Guests below 18 years of age are not allowed at the property.</li><br><br>
<li style="font-style:italic;font-size:23px;">Office ID, PAN Card and Non-Govt IDs are not accepted as ID proof(s)</li><br><br>
<li style="font-style:italic;font-size:23px;">Passport, Aadhar, Driving License and Govt. ID are accepted as ID proof(s)</li><br><br>
<li style="font-style:italic;font-size:23px;">Property staff is trained on hygiene guidelines</li><br><br>
<li style="font-style:italic;font-size:23px;">Pets are not allowed.</li><br><br>
<li style="font-style:italic;font-size:23px;">Allows private parties or events</li><br><br>
<li style="font-style:italic;font-size:23px;">Quarantine protocols are being followed as per local government authorities</li>
</ul>
<br>
<br>
<br>
<div class="rules">
<p class="r" style="display:flex;font-size:30px;font-style:italic; text-decoration:underline;"><img src="safe.jpg" width="60px" height="40px">
Safety and Hygeine</p>
<hr>
<ul="circle">
<li style="font-style:italic;font-size:23px;">Quarantine protocols are being followed as per local government authorities</li><br><br>
<li style="font-style:italic;font-size:23px;">Guests from containment zones are not allowed</li><br><br>
<li style="font-style:italic;font-size:23px;">Shared resources in common areas are properly sanitized</li><br><br>
<li style="font-style:italic;font-size:23px;">Property staff is trained on hygiene guidelines</li><br><br>
<li style="font-style:italic;font-size:23px;">Guests with fever are not allowed</li><br><br>
<li style="font-style:italic;font-size:23px;">Hand sanitizer is not provided in guest accommodation and common areas</li><br><br>
<li style="font-style:italic;font-size:23px;">Thermal screening is done at entry and exit points</li><br><br>
<li style="font-style:italic;font-size:23px;">Only those guests with safe status on Aarogya Setu app are allowed</li><br><br>
<li style="font-style:italic;font-size:23px;">Quarantine protocols are being followed as per local government authorities</li>
</ul>
<br>
<br>
<br>
<div class="rules">
<p class="r" style="display:flex;font-size:30px;font-style:italic; text-decoration:underline;"><img src="person.jpg" width="60px" height="40px">
Guest Profile</p>
<hr>
<ul="circle">
<li style="font-style:italic;font-size:23px;">Unmarried couples allowed</li><br><br>
<li style="font-style:italic;font-size:23px;">Bachelors allowed</li><br><br>
<li style="font-style:italic;font-size:23px;">Guests below 18 years of age are not allowed at the property.</li><br><br>
<li style="font-style:italic;font-size:23px;">Suitable for children</li><br><br>
</ul>
</div>
</div>
</div>
<br>
<br>
<a name="Facilities"></a>
<div class="myDiv3">

      <div class="images">
   
     <div class="image-box1">
    <img src="spa.jpg" onClick="toggleCheck(this);" />
    <br>
    <input name="spa" type="checkbox" name="spa" value="1000">
    <label for="spa"style="font-weight:bold;font-style:italic;">SPA</label>
    </div>
     
    <div class="image-box2">
  <img src="food2.jpg" onClick="toggleCheck(this);" />
  <br>
  <input name="food" type="checkbox" name="food2" value="2000">
  <label for="food"style="font-weight:bold;font-style:italic;">FOOD</label>
   </div>

   <div class="image-box3">
  <img src="gym.jpg" onClick="toggleCheck(this);" />
  <br>
  <input name="gym" type="checkbox" name="gym" value="1000">
  <label for="gym"style="font-weight:bold;font-style:italic;">GYM</label>
</div>
  
     </div>
     </div>
     <br>
     <br>
<div class="myDiv2">
<a name="Rooms"></a>
<div class="search" style="border:1px solid black; width:100%;height:100px; background-color:328779">

  <br>
  <br>
  <center>
<label style="color:#eeeeee;font-weight:bold;padding:75px;font-size: 30px;font-style: italic;">Arrival Date:</label>
<input type="date" name="date1" style="padding:10px;">

<label style="color:#eeeeee;font-weight:bold;padding:75px;font-size: 30px;font-style: italic;">Departure Date:</label>
<input type="date" name="date2" style="padding:10px;">
</center>
</div>
<br>
<br>
<div class="card-group1">

<div class="card00" style="background-color:#eeeee";>
<div class="card-body">
 <center><img class="card-img-top" src="singlebed2.jpg" alt="Card image cap" width="305px" height="200px" style="border-radius:5px;"></center>
<center><h3 class="card-title" style="font-style:italic;">ClASSIC STANDARD ROOM-NO WIFI</h3></center>  

<center><p class="card-text" style="font-weight:bold;font-style:italic;"> PRICE:RS 1700 /per night</p></center> 
<center><p style="font-weight:bold;font-style:italic;">Max:2 people</p></center> 
<center><label style="font-weight:bold;font-style:italic;">Number of People</label>
<input type="radio" name="guests" value="1">1
<input type="radio" name="guests" value="2">2</center>
<br>
<center><label style="font-weight:bold;font-style:italic;">Rooms:</label>
<input type="number" name="Int" min="1" max="5"><br><br>
<a href="Classic1.pdf" style="font-weight:bold;font-style:italic;">READ MORE</a></center>
 </div>
</div>


<div class="card11" style="background-color:#eeeee";>
 <div class="card-body">
<center><img class="card-img-top" src="singlebed1.jpg" alt="Card image cap" width="305px" height="200px" style="border-radius:5px;"></center>
<center> <h3 class="card-title"style="font-weight:bold;font-style:italic;" >CLASSIC STANDARD ROOM</h3></center>

<center><p class="card-text" style="font-weight:bold;font-style:italic;"> PRICE:RS 2500 /per night</p></center>
<center><p style="font-weight:bold;font-style:italic;">Max:2 people</p></center>
<center><label style="font-weight:bold;font-style:italic;">Number of People</label>
  <input type="radio" name="guests1" value="1">1
  <input type="radio" name="guests1" value="2">2</center>
  <br>
<center><label style="font-weight:bold;font-style:italic;">Rooms:</label>
<input type="number" name="Int1" min="1" max="5"><br><br><br>
<a href="Classic2.pdf" style="font-weight:bold;font-style:italic;">READ MORE</a></center>
</div>    
</div>


<div class="card22" style="background-color:#eeeee";>
 <div class="card-body">
<center><img class="card-img-top" src="superior.jpg" alt="Card image cap" width="305px" height="200px" style="border-radius:5px;"></center>
<center> <h3 class="card-title" style="font-weight:bold;font-style:italic;">SUPERIOR BOUTIQUE ROOM</h3></center>

 <center><p class="card-text" style="font-weight:bold;font-style:italic;"> PRICE:RS 3000 /per night</p></center>
 <center><p style="font-weight:bold;font-style:italic;">Max:2 people</p></center>
 <center><label style="font-weight:bold;font-style:italic;">Number of People</label>
  <input type="radio" name="guests2" value="1">1
  <input type="radio" name="guests2" value="2">2</center>
  <br>
<center><label style="font-weight:bold;font-style:italic;">Rooms:</label>
<input type="number" name="Int2" min="1" max="5"><br><br><br>
<a href="superior.pdf" style="font-weight:bold;font-style:italic;">READ MORE</a></center>
</div>    
 </div>
</div>

<br>
<br>

<div class="card-group2">
<div class="card00" style="background-color:#eeeee";>
<div class="card-body">
 <center><img class="card-img-top" src="deluxe.jpg"alt="Card image cap" width="305px" height="200px" style="border-radius:5px;"></center>
<center><h3 class="card-title" style="font-weight:bold;font-style:italic;">DELUXE AMBIENT ROOM</h3></center>  

<center><p class="card-text" style="font-weight:bold;font-style:italic;">PRICE:RS 3800 /per night</p></center>  
<center><p style="font-weight:bold;font-style:italic;">Max:2 people</p></center>
<center><label style="font-weight:bold;font-style:italic;">Number of People</label>
  <input type="radio" name="guests3" value="1">1
  <input type="radio" name="guests3" value="2">2</center>
  <br>
<center><label style="font-weight:bold;font-style:italic;">Rooms:</label>
<input type="number" name="Int3" min="1" max="5"><br><br><br>
<a href="deluxe.pdf"style="font-weight:bold;font-style:italic;"> READ MORE </a></center>
 </div>
</div>
<div class="card11" style="background-color:#eeeee";>
 <div class="card-body" >
<center><img class="card-img-top" src="Designer.jpg" alt="Card image cap" width="305px" height="200px" style="border-radius:5px;"></center>
<center> <h3 class="card-title" style="font-weight:bold;font-style:italic;">DESIGNER PREMIUM CLUB ROOM</h3></center>

<center><p class="card-text" style="font-weight:bold;font-style:italic;"> PRICE:RS 4100 /per night</p></center>
<center><p style="font-weight:bold;font-style:italic;">Max:2 people</p></center>
<center><label style="font-weight:bold;font-style:italic;">Number of People</label>
  <input type="radio" name="guests4" value="1">1
  <input type="radio" name="guests4" value="2">2</center>
  <br>
<center><label style="font-weight:bold;font-style:italic;">Rooms:</label>
<input type="number" name="Int4" min="1" max="5"><br><br>
<a href="designer.pdf"style="font-weight:bold;font-style:italic;"> READ MORE</a></center>
</div>    
</div>


<div class="card22" style="background-color:#eeeee";>
 <div class="card-body" >
<center><img class="card-img-top" src="suite.jpg" alt="Card image cap" width="305px" height="200px" style="border-radius:5px;"></center>
<center> <h3 class="card-title" style="font-weight:bold;font-style:italic;">SUITE ROOM</h3></center>

 <center><p class="card-text" style="font-weight:bold;font-style:italic;"> PRICE:RS 4900 /per night</p></center>
 <center><p style="font-weight:bold;font-style:italic;">Max:2 people</p></center>
 <center><label style="font-weight:bold;font-style:italic;">Number of People</label>
  <input type="radio" name="guests5" value="1">1
  <input type="radio" name="guests5" value="2">2</center>
  <br>
<center><label style="font-weight:bold;font-style:italic;">Rooms:</label>
<input type="number" name="Int5" min="1" max="5"><br><br><br>
<a href="suite.pdf"style="font-weight:bold;font-style:italic;">READ MORE </a></center>
</div>    
 </div>
</div>
<br>
<br>
<br>
<br>
<br>
<center><input type="submit"name="submit" style="margin-right:60px;background-color:336B87;color:white;"></center>

</div>
</div>
</div>
</form>
</body>
</html>

