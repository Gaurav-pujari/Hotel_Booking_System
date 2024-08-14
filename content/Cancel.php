<?php
$hostname="localhost";
$username="root";
$password="";
$db="hotel";
$conn=mysqli_connect($hostname,$username,$password,$db)or
die('connection failed');

$billno00=$_POST['billno00'];

$sql="delete from admindata where Billno=$billno00";

$query=mysqli_query($conn,$sql);
if($query)
{
echo"Successfully Canceled Your Reservation";
}else{
echo"ERROR could not connect $sql.".mysqli_error($conn);
}

mysqli_close($conn);

?>