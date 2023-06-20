<?php 
$id = $_GET['ad'];
require_once('config.php');
$query = "DELETE FROM signup_users WHERE id = $id";
$delete_ope = mysqli_query($con,$query);
if($delete_ope)
{
  header('Location: login.php');
}
?>