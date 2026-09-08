<?php

$Albums_id = $_POST["Album_id"];
$Albums_name = $_POST["title"];
$Albums_release_date = $_POST["release_date"];
$Albums_cover = $_POST["album_cover"];
$Artist_id = "A01"; // always BTS

include 'connect.php';
$sql = "INSERT INTO
`Albums`(`Album_id`, `title`, `release_date`, `album_cover`, `Artists_id`) 
VALUES 
('$Albums_id','$Albums_name','$Albums_release_date','$Albums_cover','$Artist_id')";

$result = mysqli_query($con,$sql);

if(!$result){
    echo "error: " . mysqli_error($con);
}else{
    header("location: ../index.php");
    exit;
}
?>