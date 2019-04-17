<html>
<head>
    <title>Return Book</title>
<link rel="stylesheet" href="style.css"><style>
    <link rel="stylesheet" href="style.css">
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body background=bookbank1.jpg>
<center><font face="Tempus Sans ITC" size=10 color="blue"><h1 color="#000fff">BORROWED BOOKS</h1></font><br><br></center>
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
    <form method="POST" action="delete11cse1.php">
    <center><table style="width: 400px;">
	        
        <tr>
            <td style="width: 35%;">
                <font size="15"> <b>Username:</b></font>
            </td>
            <td style="width: 65%;">
                <input id="username" type="text" name="username" maxlength="20" />
            </td>
        </tr>
        <tr>
            <td style="width: 35%;">
                <font size="15"> <b>Book:</b></font>
            </td>
            <td style="width: 65%;">
                <input id="book1" type="text" name="book1" maxlength="20" />
            </td>
        </tr></table>

               <center><input class="button button2" type="submit" name="submit" value="Submit"></center> 
            
</body>
</html>