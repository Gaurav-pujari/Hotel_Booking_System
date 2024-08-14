 <html>
          <head>
            <title></title>
            
            <style>
               fieldset{
                  width:500px;
                  height:1000px;
                  margin:auto;
                  border:10px solid;
                  border-style:groove;
                  background-color:#eeeeee;
                  
               }
               .left{
                  margin:left;
               }

               a{
                  font-weight:bold;

               }
               body{
                background-color:#336B87;
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
          <div class="topnav">
<img src="pebble.png"></img>
<a href="dashboard.html">LogOut</a>
<a href="Contactus.html">ContactUs</a>
</div>
<br>
<br>
            <fieldset>
               <center><legend>CheckOut</legend></center>   
<br>
<br>

         <?php
         error_reporting(0);
         $randNumber=rand(1,1000);
         setcookie("billno",$randNumber,time()+3600);
       $a=$_POST['guests'];
       setcookie("room1",$a,time()+3600);
       $b=$_POST['guests1'];
       setcookie("room2",$b,time()+3600);
       $c=$_POST['guests2'];
       setcookie("room3",$c,time()+3600);
       $d=$_POST['guests3'];
       setcookie("room4",$d,time()+3600);
       $e=$_POST['guests4'];
       setcookie("room5",$e,time()+3600);
       $f=$_POST['guests5'];
       setcookie("room6",$f,time()+3600);
       $Int=$_POST['Int'];
       $Int1=$_POST['Int1'];
       $Int2=$_POST['Int2'];
       $Int3=$_POST['Int3'];
       $Int4=$_POST['Int4'];
       $Int5=$_POST['Int5'];
       
       
      $y=0;
      $z=0;
      $sum=0;
      $sum1=0;
      $sum2=0;
      $sum3=0;
      $sum4=0;
      $sum5=0;
      $add=0;
      $spa=$_POST['spa'];
      setcookie("spa",$spa,time()+3600);
      $gym=$_POST['gym'];
      setcookie("gym",$gym,time()+3600);
      $food=$_POST['food'];
      setcookie("food",$food,time()+3600);
      $date1=$_POST['date1'];
      $date2=$_POST['date2'];



        $cookie_name1="Classic_Standard_No_WIFI";
        $cookie_value1="Classic_Standard_No_WIFI";
        setcookie($cookie_name1,$cookie_value1,time()+3600);


        $cookie_name2="Classic_Standard";
        $cookie_value2="Classic_Standard";
        setcookie($cookie_name2,$cookie_value2,time()+3600);
      

       $cookie_name3="Superior_Boutique";
        $cookie_value3="Superior_Boutique";
        setcookie($cookie_name3,$cookie_value3,time()+3600);
      

        $cookie_name4="Deluxe_Ambient";
           $cookie_value4="Deluxe_Ambient";
           setcookie($cookie_name4,$cookie_value4,time()+3600);

           $cookie_name5="Designer_Premium_Club";
           $cookie_value5="Designer_Premium_Club";
           setcookie($cookie_name5,$cookie_value5,time()+3600);

           $cookie_name6="Suite";
           $cookie_value6="Suite";
           setcookie($cookie_name6,$cookie_value6,time()+3600);
       
echo "<center>";

echo"Bill No:$randNumber";

echo"<br>";
echo"<br>";
echo"Hotel:".$_COOKIE['hotel'];
echo"<hr>";
      echo"PERSONAL DETAILS";
      echo"<br>";
      echo"<br>";
      echo"Name:".$_COOKIE['user1'];
      echo"<br>";
      echo"Arrival Date:",$date1;
      setcookie("date1",$date1,time()+3600);
      echo"<br>";
      echo"Departure Date:",$date2;
      setcookie("date2",$date2,time()+3600);
       echo"<br>";
       $date1 = strtotime($date1);
       $date2 = strtotime($date2);
 
          $zz=($date2-$date1) /60/60/24;
          echo " No of Days:",$zz;
          setcookie("nod",$zz,time()+3600);
          echo"<hr>"; 
         
         echo"ROOMS";
         echo"<br>";
         echo"<br>";
         if(isset($a)&&(isset($Int)))
         {
          
            $sum=1700*1*$Int*$zz;
           
         echo "<center>";
        
       echo"Room Name:".$_COOKIE[$cookie_name1];
         echo"<br>";
        
          setcookie("nog1",$a,time()+3600);
          echo"No of Guest:",$a;
          echo"<br>";
         
          setcookie("room1",$Int,time()+3600);
          echo"Rooms:",$Int;
          echo"<br>";
          
          setcookie("amount1",$sum,time()+3600);
          echo"Amount:",$sum;
           echo"<br>";
          
         }
         if(isset($b)&&($_COOKIE[$cookie_name2]))
         {
            $sum1=2500*1*$Int1*$zz;
            echo"<hr>";  
           echo "<center>";
           echo"Room Name:".$_COOKIE[$cookie_name2];
           echo"<br>";
            
            setcookie("nog2",$b,time()+3600);
            echo"No of Guest:",$b;
            echo"<br>";
            
            setcookie("room2",$Int1,time()+3600);
            echo"Rooms:",$Int1;
            echo"<br>";
            
            setcookie("amount2",$sum1,time()+3600);
            echo"Amount:",$sum1;
             echo"<br>";
          
         }
         if(isset($c)&&($_COOKIE[$cookie_name3]))
         {
            $sum2=3000*1*$Int2*$zz;
          echo"<hr>";  
         echo "<center>";
        
         
       echo"Room Name:".$_COOKIE[$cookie_name3];
         echo"<br>";
          
          setcookie("nog3",$c,time()+3600);
          echo"No of Guest:",$c;
          echo"<br>";
          setcookie("room3",$Int2,time()+3600);
          echo"Rooms:",$Int2;
          
          echo"<br>";
         
          setcookie("amount3",$sum2,time()+3600);
          echo"Amount:",$sum2;
           echo"<br>";
           
         }
         if(isset($d)&&($_COOKIE[$cookie_name4]))
         {
            $sum3=3800*1*$Int3*$zz;
            echo"<hr>";  
           echo "<center>";
           
          echo"Room:".$_COOKIE[$cookie_name4];
           echo"<br>";
           setcookie("nog4",$d,time()+3600);
            echo"No of Guest:",$d;
           
            echo"<br>";
            setcookie("room4",$Int3,time()+3600);
            echo"Rooms:",$Int3;
            echo"<br>";
            setcookie("amount4",$sum3,time()+3600);
            echo"Amount:".$sum3;
             echo"<br>";
             echo"<hr>";
         }
         if(isset($e)&&($_COOKIE[$cookie_name5]))
         { 
             $sum4=4100*1*$Int4*$zz;
            echo"<hr>";  
           echo "<center>";
          
           
       echo"Room Name:".$_COOKIE[$cookie_name5];
           echo"<br>";
           setcookie("nog5",$e,time()+3600);
            echo"No of Guest:",$e;
            
            echo"<br>";
            setcookie("room5",$Int4,time()+3600);
            echo"Rooms:",$Int4;
           
            echo"<br>";
            
            setcookie("amount5",$sum4,time()+3600);
            echo"Amount:",$sum4;
             echo"<br>";
             
         }
         if(isset($f)&&($_COOKIE[$cookie_name6]))
         {
            $sum5=4900*1*$Int5*$zz;
            echo"<hr>";  
           echo "<center>";
          
           
          echo"Room Name:".$_COOKIE[$cookie_name6];
           echo"<br>";
            echo"No of Guest:",$f;
            setcookie("nog6",$f,time()+3600);
            echo"<br>";
            echo"Rooms:",$Int5;
            setcookie("room6",$Int5,time()+3600);
            echo"<br>";
            
            setcookie("amount6",$sum5,time()+3600);
            echo"Amount:",$sum5;
             echo"<br>";
           
         }
         echo"<hr>";
         echo"FACILITIES";
         echo"<br>";
         echo"<br>";
         if(isset($food))
         {
            echo"Food:",$food;
            
            echo"<br>";
         }
         if(isset($gym))
         {
            echo"Gym:",$gym;
           
            echo"<br>";
         }
         if(isset($spa))
         {
            echo"Spa:",$spa;
            
            echo"<br>";
         }
         $y=$a+$b+$c+$d+$e+$f;
        
         echo"<hr>";
         echo"TOTAL";
         echo"<br>";
         echo"<br>";
         echo"Total Guests:",$y;
         echo"<br>";
         $z=$sum+$sum1+$sum2+$sum3+$sum4+$sum5+$food+$gym+$spa;
            $gst=$z*18/100;
         echo "GST: ",$gst;
         setcookie("gst",$gst,time()+3600);
         $total=$z+$gst;
         echo"<br>";
         setcookie("tamount",$total,time()+3600);
         echo"Total Amount:",$total;
         
        echo"<hr>";
        
         ?>
         <br>
         <br>
         <a  href="debit.php">DEBIT/CREDIT CARD</a><br><br><br>
         <a  href="upi.php">UPI </a>

         </fieldset>
  
         </body>
         </html>