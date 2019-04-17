<html>
<head>
    <title>Table Align Demo</title>
<link rel="stylesheet" href="style.css">
    <script type="text/javascript">

    function ValidateForm()
    {

if(document.register.Username.value=="")
{
alert("Enter the Name");
return false;
}

if(document.register.Password.value=="")
{
alert("Enter Valid password");
return false;
}

if(document.register.Dept.value.=="")
{
alert("Enter Email");
return false;
}

var a=isNaN(document.register.Mobile.value)
if(a==true)
{
alert("Enter Valid Phone Number");
return false;
}
if(document.register.age.value<18||document.register.age.value>30)
{
alert("You have not entered the valid age please try again!");
return false;
}
alert("YOUR APPLICATION IS TAKEN FOR FURTHER PROCESS");
return true;
         window.location.href='insert.php';
}

</script>


    </script>

</head>
<body background=bookbank1.jpg>
<center><font face="Tempus Sans ITC" size=15 color="blue"><h1 color="#000fff">SIGN UP</h1></font><br><br></center>
<center>
    <form method="POST" action='insert.php'>
    <center><table style="width: 400px;">

        <tr>
            <td style="width: 35%;">
                <font size="15"> <b>UserName:</b></font>
            </td>
            <td style="width: 65%;">
                <input id="Username" type="text" name="Username" maxlength="20" />
            </td>
        </tr>
        <tr>
            <td style="width: 35%;">
               <font size="15"> <b> Password:</b></font>
            </td>
            <td style="width: 65%;">
                <input id="Password" type="password" name="Password" maxlength="20" />
            </td>
        </tr>

        <tr>
            <td style="width: 35%;">
                <font size="15"> <b>Email:</b></font>
            </td>
            <td style="width: 65%;">
                <input id="email" type="email" name="email" maxlength="20" />
            </td>
        </tr>



		 <tr>
            <td style="width: 35%;">
                <font size="15"> <b>DOB</b></font>
            </td>
            <td style="width: 65%;">
                <input id="DOB" type="Date" name="DOB" maxlength="8" />
            </td>
        </tr>

            <tr>
            <td style="width: 35%;">
                <font size="15"> <b>Mobile:</b></font>
            </td>
            <td style="width: 65%;">
                <input id="Mobile" type="number" name="Mobile" maxlength="10" />
            </td>
        </tr>
         </table>

                <input class="button button2" type="submit" name="submit" value="Submit">



</center>
    </form>
</body>
</html>
