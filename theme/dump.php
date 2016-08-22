<?php
$name = $_POST["name"];
$title = $_POST["title"];
$photo = $_POST["photo"];
$description = $_POST["description"];

$conn = mysqli_connect("localhost","root","root","wordpress");
if(!$conn) {
  die(‘Problem in database connection: ‘ . mysql_error());
}

$query = "INSERT INTO ‘wordpress’.’wp_teammembers’ ( ‘name’, ‘title’, ‘photo’, ‘description’ ) VALUES ( $name, $title, $photo, $description )";
mysqli_query($conn, $query);

?>
