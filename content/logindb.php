<?php
$hostname="localhost";
$username="root";
$password="";
$db="hotel";
$conn=mysqli_connect($hostname,$username,$password,$db)or
die('connection failed');

$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];

$sql="Select * from signup1 where username='$username' AND password='$password' AND email='$email' ";
$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);

if($num==1)
{
header("Location:Details.php");
}
else{
echo"ERROR could not connect $sql.".mysqli_error($conn);
}
mysqli_close($conn);
?>
<?php
setcookie("user1",$_POST['username'],time()+3600);
setcookie("email",$email,time()+3600);
?>
