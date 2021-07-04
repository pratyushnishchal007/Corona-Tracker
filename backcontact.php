<?php

include 'dbconnection.php';
if(isset($_POST['submit'])){
    $Name=$_POST["Name"];
    $Email=$_POST["Email"];
    $Gender=$_POST["Gender"];
    $Symptoms=$_POST["Symptoms"];
    $Comments=$_POST["Comments"];
    $chk="";
    foreach($Symptoms as $chk1){
    $chk .= $chk1.","; 

}

    $sql="INSERT INTO `problem` (`Name`, `Email`, `Gender`, `Symptoms`, `Comments`) VALUES ('$Name', '$Email', '$Gender', '$chk', '$Comments');";
    $query=mysqli_query($con,$sql);
    if($query){
    //    echo "<br>SUCCESSFULLY INSERTED";
       
    }else{
      echo "CANNOT INSERT DATA";
    }
}

header("Location: aftercontact.php");

?>