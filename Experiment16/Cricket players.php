<html>
<center>

<body bgcolor="yellow">

<br>

<?php


$name=["Virat kohli","Rohit sharma","Shikhar Dhawan","KL Rahul","Rishab pant","Hardik pandya","R Jadeja","R Ashwin","B kumar","J Bhumrha","M Shami"];



echo "<h4> <u><b>INDIAN CRICKET TEAM</b></u></h4>
<table border='1px'>
 <tr><th class='h' >Sl No</th>
<th class='h'>NAME</th>
</tr>";

for($i=0;$i<11;$i++)

{

$sl=$i+1;

echo " <tr><th>$sl</th><th>$name[$i]</th></tr>";

}

echo "</table>";

?>

</body>

</html>