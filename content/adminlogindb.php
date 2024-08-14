<?php
$hostname="localhost";
$username="root";
$password="";
$db="hotel";
$conn=mysqli_connect($hostname,$username,$password,$db)or
die('connection failed');

$username=$_POST['username'];
$password=$_POST['password'];

$sql="Select * from adminsignup1 where username='$username' AND password='$password' ";
$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);

if($num==1)
{
    header("Location:transuccess.php");
}
else{
echo"ERROR could not connect $sql.".mysqli_error($conn);
}
mysqli_close($conn);
?>

