<?php

include 'connect.php';

$Albums_id = mysqli_real_escape_string($con, $_POST["album_id"]);
$Albums_name = mysqli_real_escape_string($con, $_POST["title"]);
$Albums_release_date = mysqli_real_escape_string($con, $_POST["release_date"]);
$Albums_cover = mysqli_real_escape_string($con, $_POST["album_cover"]);

$sql = "UPDATE `Albums` 
        SET 
        `title`='$Albums_name',
        `release_date`='$Albums_release_date',
        `album_cover`='$Albums_cover'
        WHERE Album_id = '$Albums_id'
        ";

$result = mysqli_query($con,$sql);

if(!$result){
    echo "error: " . mysqli_error($con);
}else{
    header("location: ../manage_album.php");
    exit;
}
?>