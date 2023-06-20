<?php
require_once('config.php');
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$job_title = $_POST['job_title'];
$school_name = $_POST['school_name'];
$website = $_POST['website'];
$email = $_POST['email'];
$linkedin = $_POST['linkedin'];
$phone = $_POST['phone'];
$city = $_POST['city'];
$state = $_POST['state'];
$country = $_POST['country'];
$insert = "INSERT INTO `teachers` (`first_name`, `last_name`, `job_title`, `school_name`, `website`, `email`, `linkedin`, `phone`, `city`, `state`, `country`) VALUES ('$first_name', '$last_name', '$job_title', '$school_name', '$website', '$email', '$linkedin', '$phone', '$city', '$state', '$country')";
$insert_opeartion = mysqli_query($con,$insert);
if($insert_opeartion)
{
  header('location: all-teachers.php');
}
?>