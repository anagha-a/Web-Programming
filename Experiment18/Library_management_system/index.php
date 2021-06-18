<!DOCTYPE html>
<html lang="en">
<head>



    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login Form | LMS </title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/custom.min.css" rel="stylesheet">
</head>

<br>

<div class="col-lg-12 text-center ">
    <h1 style="font-family: cursive;">LIBRARY MANAGEMENT SYSTEM</h1>
</div>

<br>

<body class="login">

<div style="background-image: url('b.jpg');">

<div class="login_wrapper">

    <section class="login_content">
        <form name="form1" action="" method="post">

            <h1>LOGIN FORM</h1>

            <div>
                <input type="text" name="username" class="form-control" placeholder="Username" required=""/>
            </div>
            <div>
                <input type="password" name="password" class="form-control" placeholder="Password" required=""/>
            </div>
            <div>

                <input class="btn btn-default submit" type="submit" name="submit" value="LOGIN">
                
            </div>

            <div class="clearfix"></div>

            <div class="separator">
            

                <div class="clearfix"></div>
                <br/>


            </div>
        </form>
    </section>


</div>

<!-- <div class="alert alert-danger col-lg-6 col-lg-push-3">
    <strong style="color:white">Invalid</strong> Username Or Password.
</div>
 -->

</body>
</html>


<?php

include("connection.php");

if(isset($_POST['submit']))
{
    $USERNAME=$_POST['username'];
    $PASSWORD=$_POST['password'];

    $query="SELECT * FROM `login` WHERE `username`='$USERNAME' AND `password`='$PASSWORD'";
    $result=$db->query($query);

if(mysqli_num_rows($result)>0)
    {
     $row = $result->fetch_assoc();
    
     $loginid=$row['id'];
    
     session_start();
     $_SESSION['LOGINID']=$loginid;
     header("location:admin-home.php");
            
    }
else{ ?>
    <script>
    alert("Invalid username and password..!!!");

    </script>
    <?php
     }

}
?>