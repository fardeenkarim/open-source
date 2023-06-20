<?php 
$id = $_GET['eNjBtTjRgSwPdHxVtNmPtWyPtWxVuKwKwBgZvQjEyAxXuBlXrRpMcJiTrSoNdNeBnXdHxMmDnWxUxXfStSiHjSyRxZsOuRhFbXgU'];
require_once('config.php');
$query = "UPDATE teachers SET status = 0 WHERE id = $id";
$update_ope = mysqli_query($con,$query);
if($update_ope)
{
    header('Location: all-teachers.php');
}
?>