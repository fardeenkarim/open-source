<?php
require_once('config.php');
$email = $_POST['email'];
$password = $_POST['password'];
$query = "SELECT * FROM login_users WHERE email = '$email' AND password = '$password'";
$login_ope = mysqli_query($con,$query);
$data = mysqli_fetch_assoc($login_ope);
if (!empty($data)) {
if ($data['email'] == $email && $data['password'] == $password ) {
  session_start();
  $_SESSION['email'] = $email;
  $_SESSION['role'] = $data['role'];
  header('Location: index.php');
}} else {
  header('Location: login.php');
}
?>