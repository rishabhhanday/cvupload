<?php
session_start();
$email = $_SESSION["youremail"];
$conn = mysqli_connect("localhost","id2476037_root","RishabH@007","id2476037_test");
$sql = "SELECT * FROM uploadcv WHERE email='$email'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$imagedata = $row['imageData'];
header("content-type:image/pdf");
echo $imagedata;
?>