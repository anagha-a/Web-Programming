<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>lendbook
 </title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/custom.min.css" rel="stylesheet">
</head>

<br>

<div class="col-lg-12 text-center ">
    <h1 style="font-family:Lucida Console">Library Management System</h1>
</div>


<body class="login" style="margin-top: -20px;">
<form method="POST">
    <div class="login_wrapper">
     <p>SELECT BOOK : </p>
     <select name="book">
      <?PHP
           
    include("connection.php");

    $query="SELECT * FROM `books` ;";

    $result=$db->query($query);
    
    if(mysqli_num_rows($result)>0)
    {
        $rowno=0;

    while($row = $result->fetch_assoc())
    {       
    ?>
      <option value="<?php echo $row['id'] ?>"> <?php echo $row['bookname']?> </option>
    <?php }}
    ?>
  
</select>

    </div>
    <div class="login_wrapper">
     <p>SELECT MEMBER : </p>
     <select name="member">
      <?PHP
           
    include("connection.php");

    $query="SELECT * FROM `members` ;";

    $result=$db->query($query);
    
    if(mysqli_num_rows($result)>0)
    {
        $rowno=0;

    while($row = $result->fetch_assoc())
    {       
    ?>
      <option value="<?php echo $row['id'] ?>"> <?php echo "MEMBER ID : ".$row['memberid']."  NAME :  ".$row['name']?> </option>
    <?php }}
    ?>
  
</select><br><br>
<input type="submit" name="submit" value="lend book">
    </div>

  

    </form>


<center>
<button><a href="admin-home.php">BACK TO HOME</a></button>
</center>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
    $bookid = $_POST['book'];
    $memberid  = $_POST['member'];
  
    $query="INSERT INTO `Bbooks`(`memid`, `bookid`) VALUES ($memberid,$bookid)";

    if( $db->query($query)==TRUE){
      ?>
    echo "<div class="alert alert-success col-lg-6 col-lg-push-3">
        lended successfully                            
       </div>";
     <?
       }
       else{
         
        echo "<div class="alert alert-success col-lg-6 col-lg-push-3">
        oops!! something went wrong
    </div>";
    <?php

       }
     }
       ?>

      <!-- SELECT * FROM books,Bbooks WHERE books.id!=Bbooks.bookid  -->