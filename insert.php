<?php
if (isset($_POST['submit1']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$u_name=$_POST['u_name'];
	$password=$_POST['password'];
	
	include('connect.php');
	
	$query ="INSERT into registration(name,email,u_name,password) VALUE('$name' , '$email' , '$u_name' , '$password')";
 if(mysqli_query($con , $query))
{
	echo "<script>alert('data inserted')</script>";
}
else
{
	echo "<script>alert('data fail')</script>";
}
}

?>