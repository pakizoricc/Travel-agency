<?php

$conn = mysqli_connect('localhost', 'root', '', 'fin_travel');

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

//postavljanje putanje koja vodi do foldera u kome se nalaze slike za stranicenje
$dir_path = '../offers/';
$extensions = array('jpg');

$images = glob('C:\xampp\htdocs\FIN Travel\FIN-Travel-main\offers\*.jpg');
$total_images = count($images);

$records_per_page = 25;
$total_pages = ceil($total_images / $records_per_page);

if (isset($_GET['page']) && is_numeric($_GET['page'])) {
  $current_page = $_GET['page'];
} else {
  $current_page = 1;
}

$offset = ($current_page - 1) * $records_per_page;

//smestanje podataka u bazu
for ($i = $offset; $i < $offset + $records_per_page && $i < $total_images; $i++) {
  $name_of_image = basename($images[$i]);
  $file_path = $dir_path . $file_name;
  $sql = "INSERT INTO aragnements (name_of_image, file_path) VALUES ('$name_of_image', '$file_path')";
  mysqli_query($conn, $sql);
}

//uzima slike iz baze
$sql = "SELECT * FROM arangements LIMIT $offset, $records_per_page";
$result = mysqli_query($conn, $sql);

$images = array();

while ($row = mysqli_fetch_assoc($result)) {
  $images[] = $row['file_path'];
}

mysqli_close($conn);

return $images;
?>
