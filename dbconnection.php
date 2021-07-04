<?php
$servername="localhost";
$username="root";
$password="";
$database="contact";
$con=mysqli_connect($servername,$username,$password,$database);


if($con){
    // echo "CONNECTION SUCCESSFUL";
}else{
   die("FAILED TO CONNECT DUE TO".mysqli_connect_error());
}
?>