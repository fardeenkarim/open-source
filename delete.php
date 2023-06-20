<?php 
$id = $_GET['pIcOxHlOrEgUxKuKaIaNgYbZdWxObXqWoIpWnXyLxIvShQcKbSoHbSdUkXlIqWbEfTsFuZnQwChSwWaUoOkYtOoIzRkPiBbZjAbQ'];
require_once('config.php');
$query = "DELETE FROM teachers WHERE id = $id";
$delete_ope = mysqli_query($con,$query);
if($delete_ope)
{
  header('Location: all-teachers.php');
}
?>