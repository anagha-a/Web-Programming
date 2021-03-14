<?php
echo "<h3>";
$a="<h3 style='color:green'>";
$b="<h3 style='color:pink'>";
$c="</h3>";
$name=["Anagha","Sree","Eva","Ishan","Ethen"];
$t=$name;
echo "$a Printing using print_r() $c";
print_r($name);
echo "<br>";
echo "$b--------------------------------------------------------------------$c";
echo "<br>";
asort($name);
echo "$a Sorting using asort() $c";
print_r($name);
echo "<br>";
echo "$b-------------------------------------------------------------------$c";
echo "<br>";
arsort($t);
echo "$a Sorting using arsort() $c";
print_r($t);
echo "</h3>";
?>