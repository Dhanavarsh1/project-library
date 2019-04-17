<html>
<head>
    <title>Borrowed</title>
<style>
    ul {
    list-style-type: none;
   padding : 0;
   margin : 0;
    overflow : hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
   color:white;
    text-align: center;
    padding: 20px 30px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}
   
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body background=bookbank1.jpg>
    <div  class="unlist">
        
    <ul>
        <div class="list">
    <li><a href="bookoperation.php">HOME</a></li>
    <li style="float:right"><a href="logout.php">LOGOUT</a></li>
        </div>
            </ul>
    </div>
<center><font face="Tempus Sans ITC" size = 15 color="blue"><h1 color="#000fff">BOOKS BORROWED</h1></font><br><br></center>
<center>
<?php
include("connect.php");
$f1=$s=" ";
if($_SERVER['REQUEST_METHOD']=="POST")
{
       $s=$_POST["username"];
         	     $query="SELECT * FROM users WHERE username = '$s'";
 $result = mysqli_query($con,$query);
if ($result->num_rows > 0) {
    echo "<table><tr><th>BOOK1</th><th>BOOK2</th><th>COUNT</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["sub1"]. "</td><td>" . $row["sub2"]. " </td><td>" . $row["cn"]. " </td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
} 
}
?>
</center>
</body>
</html>