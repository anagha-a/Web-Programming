<?php
$username="root";
$password="";
$dbname="LMS";
$hostname="localhost";


//creating conncetion
$db = new mysqli($hostname,$username,$password,$dbname);
//checking errors
if($db->connect_error){
	die("connection failed".$db->connect_error);
}

?>