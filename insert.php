<?php
include("connect.php");
$f1=$f2=$f3=$f4=$f5=$f6=$f7=$f8=$f9=" ";
if($_SERVER['REQUEST_METHOD']=="POST")
{
    
     $f1=$_POST["Username"];
     $f2=$_POST["Password"];
         $f3=$_POST["email"];
          	 $f4=$_POST["DOB"];
$f5=$_POST["Mobile"];
	     $query= "INSERT INTO users VALUES ('$f1','$f2','$f3','$f4','$f5','$f6','$f7','$f8');";
    if(mysqli_query($con,$query))
    {
        $f1=$f2=$f3=$f4=$f5=$f6=$f7=$f8=" ";
    }
 header("location:valid.php");   
}
?>
