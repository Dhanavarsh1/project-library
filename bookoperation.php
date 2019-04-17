<?php
session_start();
?>
<html>
<head>
    <link rel="stylesheet" href="style.css">
<title>Book operations</title>
<style>
    .btn-group .button {
    background-color: green; /* Green */
    border: 1px solid pink;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    cursor: pointer;
    width: 150px;
    display: block;
}

.btn-group .button:not(:last-child) {
    border-bottom: none; /* Prevent double borders */
}

.btn-group .button:hover {
    background-color:darkslateblue;
}</style>
</head>
<body background=bookbank1.jpg>

<center><font face="Tempus Sans ITC" size = 15 color="blue"><h1 color="#000fff">BOOK OPERATIONS</h1></font><br><br></center>
<center><table border=0 class="btn-group">
<tr><td><center><a class="button" href="borrowedbooks.php">VIEW BOOK</a></center></td></tr>
<tr><td><center><a class="button" href="returnbook.php">RETURN BOOK</a></center></td></tr>
<tr><td><center><a class="button" href="selectbook1.php">GET A BOOK</a></center></td></tr>
</table></center>
<center>

<?php
if($_SESSION["username"]) {
?>
Welcome <?php echo $_SESSION["username"]; ?>. Click here to <a href="logout.php" title="Logout">Logout.
<?php
}
?>
</CENTER>
</body></html>
