<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>book </title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/custom.min.css" rel="stylesheet">
</head>

<br>

<div class="col-lg-12 text-center ">
    <h1 style="font-family:Lucida Console">LIBRARY MANAGEMENT SYSTEM</h1>
</div>


<body class="login" style="margin-top: -20px;">
<br>
<br>
<div style="background-image: url('bst.jpg');">

    <div class="login_wrapper">

            <section class="login_content" style="margin-top: -40px;">
                <form name="form1" action="" method="post">

                    <h2>ADD BOOK</h2><br>
                 
                    <div>
                        <input type="text" class="form-control" placeholder="book name" name="bookname" required=""/>
                    </div>
                    <div>
                        <input type="text" class="form-control" placeholder="author name" name="authorname" required=""/>
                    </div>
               <div>
                        <input type="text" class="form-control" placeholder="publisher" name="publisher" required=""/>
                    </div>
<div>
                        <input type="text" class="form-control" placeholder="price" name="price" required=""/>
                    </div>
                    <div class="col-lg-12  col-lg-push-3">
                        <input class="btn btn-default submit " type="submit" name="submit" value="Add book">
                    </div>

                </form>
            </section>



    </div>

     <!-- sql return success avumbo block acticate akka -->
         <!-- <div class="alert alert-success col-lg-6 col-lg-push-3">
        Registration successfully, You will get email when your account is approved
    </div> -->
<center>
<button><a href="admin-home.php">BACK TO HOME</a></button>
</center>
</body>
</html>


<?php

include("connection.php");

if(isset($_POST['submit']))
{
    $bookname = $_POST['bookname'];
    $authorname  = $_POST['authorname'];
    $Publisher=$_POST['Publisher'];
    $Price=$_POST['Price'];

    $query="INSERT INTO `books`(`bookname`, `author`,`Publisher`,`Price`) VALUES ('$bookname','$authorname','$Publisher','$Price')";

    if( $db->query($query)==TRUE){
    	?>
   echo  "<div class="alert alert-success col-lg-6 col-lg-push-3">
        book inserted successfully                             
       </div>";
     <?
       }
       else{
          
       	echo "<div class="alert alert-success col-lg-6 col-lg-push-3">
        insertion failed!!!
    </div>";
    <?php

       }






}
//echo "<H3>error".$db->error."</H3>"
?>
