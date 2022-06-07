<?php 

include "conn.php";

$title = $_POST['title'];
$description = $_POST['description'];
$image = $_FILES['image'];

// echo "$title <br> $description";

move_uploaded_file($image['tmp_name'], 'uploads/'.$image['name']);

$up_image = 'uploads/'.$image['name'];

// preparar

$stmt = $connect->prepare("INSERT INTO posts (title, description, image) VALUES (:TITLE, :DESCRIPTION, :IMAGE)");

//trocar

$stmt->bindParam(':TITLE', $title);
$stmt->bindParam(':DESCRIPTION', $description);
$stmt->bindParam(':IMAGE', $up_image);

//executar

$stmt->execute();

header("Location: index.php");

?>