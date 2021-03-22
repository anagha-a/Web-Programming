<html>
<body align="center" bgcolor="lightblue">
<h1>Search The Book</h1>
<form action="" method="POST">
Title : <input type="text" name="t1"><br>
<input type="submit" value="search" name="search">

</form>
<table align=center border=1>
<tr><td>Accession number</td>
<td>Title</td>
<td>Author</td>
<td>Edition</td>
<td>Publisher</td>
</tr><br>

<?php


$con=mysqli_connect('localhost','root','','book');
if(isset($_POST['search']))
{
$title1=$_POST['t1'];
$sql="SELECT * FROM book2 WHERE title LIKE '%{$title1}%'";
$result=mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result))
{
?>
    <tr><td> <?php echo $row["accno"]; ?> </td>
        <td> <?php echo $row["title"]; ?> </td>
        <td> <?php echo $row["author"]; ?> </td>
        <td> <?php echo $row["edition"]; ?> </td>
        <td> <?php echo $row["publisher"]; ?> </td></tr>

<?php
}
}
?>

</table>

</body>
</html>

