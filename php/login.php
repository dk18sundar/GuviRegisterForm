<?php
session_start();
$conn= new mysqli('localhost','root','','test');

 $email=$_POST['email'];
$password=$_POST['password'];

$s="select * from registration where email='$email' && password='$password' ";
$result=mysqli_query($conn,$s);
$num=mysqli_num_rows($result);

if($num==1){
	header('location:/html/profile.html');
}
else
{
	
	header('location:/html/login.html');
}
?>
