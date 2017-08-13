<?php
session_start();
$userSessionId = $_SESSION["userSessionId"];
$conn = mysqli_connect("localhost","id2476037_root","RishabH@007","id2476037_test");
$sql = "SELECT * FROM UploadCv WHERE userId='$userSessionId'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$imagedata = $row['userImage'];
header("content-type:image/pdf");
echo $imagedata;
?>