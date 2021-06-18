<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Show members </title>

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
<div style="background-image: url('r.jpg');">


    <div class="login_wrapper">

            <table class="table text-center"  >
    <thead class="text-uppercase bg-dark">
      <tr class="text-white">
      <td > Sl.no   </td>
      <td >  NAME   </td>
      <td > ADDRESS </td>
      <td > PHONE NUMBER </td>
      <td > MEMBER ID </td>
      <td > REMOVE MEMBER  </td>

    </tr>
</thead>
    <tr>

      <?PHP
           
    include("connection.php");

    $query="SELECT * FROM `members` ;";

    $result=$db->query($query);
    
    if(mysqli_num_rows($result)>0)
    {
        $rowno=0;

    while($row = $result->fetch_assoc())
    {
            $rowno++;
            
    ?>
      <td><?php echo $rowno ?></td>
      <td><?php echo $row['name']?></td>
      <td><?php echo $row['address']?></td>
      <td><?php echo $row['phoneno']?></td>
      <td><?php echo $row['memberid']?></td>
      <td><div align="center"><a href="deletemember.php?id=<?php echo $row['id']?>">Remove</a></div></td> 
    </tr>
    <?PHP }}?>
  </table>



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


