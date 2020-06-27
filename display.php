<?php

include("connect.php");
///if ("connect");
//echo 'yes';

$query="SELECT * FROM REGISTRATION";
$data = mysqli_query($con,$query);
$result = mysqli_fetch_assoc($data);
if ($data ->num_rows >= 0){
    while ($result= $data ->fetch_assoc())
    {
echo"<br>id:". $result['id'] ." ".$result['email'] ." ".$result['name'] ." ".$result['u_name'] ." ".$result['password'];
    }}
    //else{
       // echo '0';
    
    //}
    //$con ->close();
    
?>
