<?php
session_start();

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$password=$_POST['password'];
$birthday=$_POST['birthday'];

$conn= new mysqli('localhost','root','','test');
$s="select * from registration where email='$email' ";
$result=mysqli_query($conn,$s);
$num=mysqli_num_rows($result);

if($num==1){
	echo "username already exits";
}
else{
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO registration (fname,lname,email,password,birthday)
values ('$fname','$lname','$email','$password','$birthday')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
?>