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
$id = $_POST['id'];
$update_query = "UPDATE teachers SET first_name ='$first_name', last_name = '$last_name', job_title = '$job_title', school_name = '$school_name', website = '$website', email = '$email', linkedin = '$linkedin', phone = '$phone', city = '$city', state = '$state', country = '$country' WHERE id = $id";
$update_ope = mysqli_query($con,$update_query);
if ($update_ope) 
{
  header('Location: all-teachers.php');
}
?>