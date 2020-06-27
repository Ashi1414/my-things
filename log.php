<?php 
require_once('connect.php');

if(isset($_POST['btn1']))
{
    $u_name=$_POST['username'];
    $password=$_POST['password'];

    $query=mysqli_query($con,"select * from registration where u_name=$u_name && password=$password");
    $rowcount=mysqli_num_rows($query) ;
    if($rowcount==true)
{
    echo "your user name is right";
}
else {
    echo "wrong entry";
}
}
?>