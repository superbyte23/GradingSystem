<?php

include '../config/config.php';
include '../config/conn.php';

$sql = "DELETE FROM course WHERE courseID = ".$_GET['id'];
$result = $conn->query($sql);

if ($conn->query($sql) === TRUE){
    echo '<script> window.location = "index.php";</script>';
}