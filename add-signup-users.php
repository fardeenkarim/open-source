<?php
require_once('config.php');
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$insert = "INSERT INTO `signup_users` (`first_name`, `last_name`, `email`, `password`) VALUES ('$first_name', '$last_name', '$email', '$password')";
$insert_opeartion = mysqli_query($con,$insert);
if($insert_opeartion)
{
  header('location: login.php');
}
?>