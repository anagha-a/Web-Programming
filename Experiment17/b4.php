<html>
<body bgcolor="lightblue">
<?php
if(isset($_POST['Submit']))
{
$con=mysqli_connect('localhost','root','','book');
$accno1=$_POST['accnum'];
$title1=$_POST['title'];
$author1=$_POST['author'];
$edition1=$_POST['edition'];
$publisher1=$_POST['publisher'];
$sql="INSERT INTO book2 (`accno`,`title`,`author`,`edition`,`publisher`) VALUES ('$accno1','$title1','$author1','$edition1','$publisher1')";
$rs=mysqli_query($con,$sql);
if($rs)
{
echo "<script>alert('Recorded Successfully')</script>";
}
}
?>
<h2>Register Book</h2>
<form method="POST" action="">
<table>
<tr>
<td>Accession Number : </td>
<td><input type=text name="accnum" required></td>
</tr>
<tr>
<td>Title : </td>
<td><input type="text" name="title" required></td>
</tr>
<tr>
<td>Author :</td>
<td><input type="text" name="author" required></td>
</tr>
<tr>
<td>Edition :</td>
<td><input type="text" name="edition" ></td>
</tr>
<tr>
<td>Publisher :</td>
<td><input type="text" name="publisher" ></td>
</tr>
</table>
<input type="submit" value="Submit" name="Submit">
</form>

</body>
</html>