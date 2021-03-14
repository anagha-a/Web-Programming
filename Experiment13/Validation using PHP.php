<html>
 <head>
  <title>form</title>
  <style>
input,select{
  border-radius: 4px;
  background-color: rgb(140, 233, 240);
  border-color: rgba(255, 0, 0, 0);
}
input:hover{
  background-color: #06D85F;
}
input[type="submit"]:hover{
  box-shadow: 0 0 1rem 0 rgba(0, 7, 0, .7)
}

      </style>
 </head>
<center>
<body bgcolor="#abf9ff">
<?php

?>
<br>
<br>
<h3 style="color:brown;font-size:30px"><u>REGISTRATION FORM</u></h3>
<form action='' method="POST">
<table>
 <tr>
  <td> First name</td>
  <td> <input type="text" id="fname" name="fname"></td>
 </tr>
<tr>
  <td> Last name</td>
  <td> <input type="text" id="lname" name="lname"></td>
 </tr>
 <tr>
  <td> Gender</td>
  <td> <input type="radio" id="gen_m" value='male' name="gen">Male<input type="radio" value='female' id="gen_f" name="gen">Female</td>
 </tr>
 
<tr>
  <td> User name</td>
  <td><input type="text" id="uname" name="uname"> </td>
 </tr>
<tr>
  <td> Password</td>
  <td> <input type="password" id="pass"  name="pass"></td>
 </tr>
<tr>
<tr>
  <td>Confirm password</td>
  <td> <input type="password" id="cpa" name="cpa"></td>
 </tr>
<tr>
  <td>Email </td>
  <td> <input type="email" id="mail"  name="email"></td>
 </tr>
<tr>
  <td> Mobile</td>
  <td> <input type="phone" id="tel"  name="phone"></td>
 </tr>
<tr>
  <td>City</td>
  <td><select  id="di"  name="district">
  <option value="Select" Selected>Select
  <option value="kozhikode">Kozhikode</option>
  <option value="kannur">Kannur</option>
  <option value="malapuram">Malapuram</option>
</select>
  </td>
 </tr>
</table>
<br>
<input type="submit" value="register" name="submit" style="background:green;color:white">

<h3 style="color:red"></h3>
<h3 style="color:green"></h3>
</form>

<?php
$d="<br><br><div style='width: 400px;height:26px;box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); border-radius: 9px;background-color: rgba(255, 255, 255, .15);backdrop-filter: blur(5px);'>";
$a="<h3 style='color:red'>";
$b="<h3 style='color:green'>";
$c="</h3></div>";
if(isset($_POST["submit"]))
{
$fname=$_POST["fname"];
    if($fname==NULL)
    {
        echo "$d $a First Name can not be Empty $c";
        exit;
    }
    else
    {
        if (!preg_match("/^[a-zA-z]*$/", $fname))
        {
        echo "$d $a Only characters and white space allowed in names $b";
        exit;
        }
    }
$lname=$_POST["lname"];
if($lname==NULL)
{}
    else if(!preg_match("/^[a-zA-z]*$/", $lname))
    {
    echo " $d $a Only characters and white space allowed in names $b";
    exit;
    }

    if(!isset($_POST["gen"]))
    {
    echo "$d $a Please select a gender $b";
    exit;
    }
$uname=$_POST["uname"];
if($uname==NULL)
{
    echo "$d $a user name can not be Empty $c";
    exit;
}
else
{
    if(!preg_match("/^[a-zA-z]*$/", $uname)) 
    {
    echo "$d $a Username only contain characters $b";
    exit;
    }
}
$pass=$_POST["pass"];
if($pass==NULL)
{
    echo "$d $a Password cannot be empty  $c";
    exit;
}
else
{
    if(strlen($pass)<8)
    {
    echo "$d $a Password must contain atleast 8 characters $b";
    exit;
    }
}
$cpa=$_POST["cpa"];
if($pass!=$cpa)
{
    echo "$d $a confirm password incorrect  $c";
    exit;
}

$mail=$_POST["email"];
if($mail==NULL)
{
    echo "$a Email must not empty  $c";
    exit;
}
else{
    if(!filter_var($mail,FILTER_VALIDATE_EMAIL))
    {
        echo "$d $a Email must be valid $c";
        exit;
    }
}
$phone=$_POST["phone"];
if($phone==NULL)
{
    echo "$d $a Phone number must not be empty  $c";
    exit;
}
$di=$_POST["district"];
if($di==NULL)
{
    echo "$d $a city must not be empty  $c";
    exit;
}
echo "$d $b Registration successfully completed $c";

echo "<br><br><br>";
echo "$b Name\t:$fname $lname $c";
echo "$b username\t:$uname $b";
echo "mail\t: $mail<br><br>";
echo "phone\t: $phone<br><br>";
echo "district\t: $di";
}
?>
</body>
</html>
