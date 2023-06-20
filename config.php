<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$db_name = 'open-source-project';
$con = mysqli_connect($hostname,$username,$password,$db_name);
if(!$con){
echo 'Not Connected';
}
?>