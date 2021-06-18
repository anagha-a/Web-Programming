<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Registration Form | LMS </title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/custom.min.css" rel="stylesheet">
</head>

<br>

   
<div class="col-lg-12 text-center ">
 <h1 style="font-family:Lucida Console">LIBRARY MANAGEMENT SYSTEM</h1></div>


<body class="login" style="margin-top: -20px;">
<br>
<br>
<div style="background-image: url('reg.jpg');">


    <div class="login_wrapper">

            <section class="login_content" style="margin-top: -40px;">
                <form name="form1" action="" method="post">
                    <h2><b>Member Registration Form</b></h2><br>

                    <div>
                        <input type="text" class="form-control" placeholder="FirstName" name="firstname" required=""/>
                    </div>
                    <div>
                        <input type="text" class="form-control" placeholder="LastName" name="lastname" required=""/>
                    </div>

                
                    <div>
                        <input type="text" class="form-control" placeholder="Address" name="Address" required=""/>
                    </div>
                    <div>
                        <input type="text" class="form-control" placeholder="contact" name="contact" required=""/>
                    </div>
              
                    <div>
                        <input type="text" class="form-control" placeholder="Enrollment No" name="enrollmentno" required=""/>
                    </div>
                    <div class="col-lg-12  col-lg-push-3">
                        <input class="btn btn-default submit " type="submit" name="submit" value="Register">
                    </div>

                </form>
            </section>



    </div>

     <!-- sql return success avumbo block acticate akka -->
         <!-- <div class="alert alert-success col-lg-6 col-lg-push-3">
        Registration successfully, You will get email when your account is approved
    </div> -->



</body>
</html>


<?php

include("connection.php");

if(isset($_POST['submit']))
{
    $FIRSTNAME = $_POST['firstname'];
    $LASTNAME  = $_POST['lastname'];
    $ADDRESS   = $_POST['Address'];
    $contact   = $_POST['contact'];
    $MEMBERID  = $_POST['enrollmentno'];

    $NAME= $FIRSTNAME." ".$LASTNAME;

    $query="INSERT INTO `members`(`name`, `address`, `phoneno`, `memberid`) VALUES ('$NAME','$ADDRESS','$contact',$MEMBERID)";

    if( $db->query($query)==TRUE){
    	?>
   echo "<div class="alert alert-success col-lg-6 col-lg-push-3">
        Registration successfull                             
       </div>";
     <?
       }
       else{
       	echo "<div class="alert alert-success col-lg-6 col-lg-push-3">
        Registration failed!!!
    </div>";
    <?php

       }






}

?>
<center>
<button><a href="admin-home.php">BACK TO HOME</a></button>
</center>