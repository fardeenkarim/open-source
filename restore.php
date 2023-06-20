<?php 
$id = $_GET['oUhTbAeCaNkXdKfNqMbEvVdUlZaQeRcGyIkLtCwUoLiLeXwOdDmTfRdCsMyDzLbLqFqDtVpPzRjCdBuBoDsReCpEtIqXePcPpReM'];
require_once('config.php');
$query = "UPDATE teachers SET status = 1 WHERE id = $id";
$update_ope = mysqli_query($con,$query);
if($update_ope)
{
    header('Location: all-teachers.php');
}
?>