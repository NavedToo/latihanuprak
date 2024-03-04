<?php
include_once("config.php");

$id = $_GET['id'];

$result = mysqli_query($conn, "DELETE FROM dataGuru WHERE id=$id");

if ($result) {
    echo header("location:dashboard.php");
}
?>