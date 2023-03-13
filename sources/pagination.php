<?php
// Connect to database
$conn = mysqli_connect('localhost', 'root', '', 'fin_travel');

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Get the total number of images in the folder
$dir_path = '../offers/';
$extensions = array('jpg');

$images = glob('C:\xampp\htdocs\FIN Travel\FIN-Travel-main\offers\*.jpg');
$total_images = count($images);

foreach ($images as &$str) {
  $str = basename($str);
}

?>
