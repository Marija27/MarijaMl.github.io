<?php 

$mysqli= new mysqli('localhost','root','','quiz');

if($mysqli->connect_error){
	echo("Failed to connect to MySQL");
	exit();
}





?>