<?php

require_once('config.php');

$img = $_FILES['img'];

$img_name = 'img-' . time() . '-' . rand() . '.' .pathinfo($img['name'],PATHINFO_EXTENSION);

move_uploaded_file($img['tmp_name'], 'img/' . $img_name);

$query = "INSERT INTO `img` (`img`) VALUES ('$img_name')";



$insert_ope = mysqli_query($con, $query);

if ($insert_ope) {
  header('Location: add-image.php');
} else {
  echo 'Error';
}

?>