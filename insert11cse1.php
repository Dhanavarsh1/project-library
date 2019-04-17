<?php
include("connect.php");
$f1=$s=" ";

if($_SERVER['REQUEST_METHOD']=="POST")
{
    
     $s=$_POST["username"];
$f1=$_POST["book1"];
         

	     $query="update users set sub1 = '$f1' where username = '$s';";
mysqli_query($con,$query);
$query1="update 11cse set cn = cn-1 where sub = '$f1';";
 mysqli_query($con,$query1);
$query2="update users set cn = cn+1 where username = '$s';";
             
  

 mysqli_query($con,$query2);
header("location:orderdone.php");    
}

?>
