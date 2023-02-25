<?php
// Connect to database
$conn = mysqli_connect('localhost', 'root', '', 'fin_travel');

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Get the total number of images in the folder
$dir_path = 'offers';
$images = glob($dir_path . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
$total_images = count($images);

// Get the images for the current page
$records_per_page = 25;
$total_pages = ceil($total_images / $records_per_page);

if (isset($_GET['page']) && is_numeric($_GET['page'])) {
  $current_page = $_GET['page'];
} else {
  $current_page = 1;
}

$offset = ($current_page - 1) * $records_per_page;

// Insert the images into the database
for ($i = $offset; $i < $offset + $records_per_page && $i < $total_images; $i++) {
  $name_of_image = basename($images[$i]);
  $file_path = $dir_path . $file_name;
  $sql = "INSERT INTO aragnements (name_of_image, file_path) VALUES ('$name_of_image', '$file_path')";
  mysqli_query($conn, $sql);
}

// Retrieve the images from the database
$sql = "SELECT * FROM arangements LIMIT $offset, $records_per_page";
$result = mysqli_query($conn, $sql);

$images = array();

while ($row = mysqli_fetch_assoc($result)) {
  $images[] = $row['file_path'];
}

mysqli_close($conn);

return $images;
?>
