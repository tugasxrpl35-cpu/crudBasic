<?php

$conn = mysqli_connect("localhost", "root", "", "CRUD_test");
if(!$conn) {
echo "<script>console.log(`failed to connect into database`);</script>";
} else {
echo "<script>console.log(`success to connect`);</script>";
}
?>
