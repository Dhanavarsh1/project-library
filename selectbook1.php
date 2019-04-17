<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">

</head>
<body background=bookbank1.jpg>
<center><font face="Tempus Sans ITC" size=12 color="blue"><h1 color="#000fff">SELECT BOOK</h1></font></center>
    
 
    <center>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM 11cse";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>BOOKS</th><th>COUNT</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["sub"]. "</td><td>" . $row["cn"]. " </td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?> 
<form method="POST" action="insert11cse1.php">
    <center><table style="width: 400px;">
	        
        <tr>
            <td style="width: 35%;">
                <font size="15"> Username:</font>
            </td>
            <td style="width: 65%;">
                <input id="username" type="text" name="username" maxlength="20" />
            </td>
        </tr>
        <tr>
            <td style="width: 35%;">
                <font size="15"> Book:</font>
            </td>
            <td style="width: 65%;">
                <input id="book1" type="text" name="book1" maxlength="20" />
            </td>
        </tr></table>

                <input  class="button button2" type="submit" value="Submit"/>
            

</center>
</body>
</html>
