<?php
 $r=$_COOKIE['email'];
$receiver =$r;
$subject ="HOTEL RESERVATION BILL";
$body= "BILL NO:$_COOKIE[billno]
        ---------------------------------------
        Hotel Name:$_COOKIE[hotel]
        ---------------------------------------
        DETAILS
        ---------------------------------------
        Name: $_COOKIE[user1]

        Arrival Date:$_COOKIE[date1]

        Departure Date:$_COOKIE[date2]
        
        $_COOKIE[roomname]
          
        $_COOKIE[totalfacility]

        No of Days:$_COOKIE[nod]
        ---------------------------------------
         TOTAL
        ---------------------------------------
        Sub Total:$_COOKIE[subtotal]
        GST:$_COOKIE[gst]
        ---------------------------------------
        Total Amount:$_COOKIE[tamount]
        ---------------------------------------";
        
        

$sender = "gauravpujari123@gmail.com";

if(mail($receiver,$subject,$body,$sender))
{
    echo "Email sent successfully to $receiver";
}else{
    echo "Sorry, failed while sending mail!";
}
?>

