<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

$host="localhost";
//$user="id7171999_joranome";
//$pass="Raulito48.";
//$database="id7171999_rs";
$user="root";
$pass="";
$database="casasroberto";
$db= new mysqli($host,$user,$pass,$database);
	if($db -> connect_errno){
		die("Fallo la conexión a MySQL: (" . $db -> mysqli_connect_errno() . ") " . $db -> mysqli_connect_error());
	}
	mysqli_set_charset($db,'utf8');
?>