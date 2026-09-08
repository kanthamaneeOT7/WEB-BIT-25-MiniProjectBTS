<?php

$id = $_GET["id"];

include "connect.php";

$sql = "DELETE FROM Albums WHERE Album_id = '$id'";

$result = mysqli_query($con, $sql);

if(!$result){
    echo "error";
}else{
    header("location: ../manage_album.php");
    exit;
}