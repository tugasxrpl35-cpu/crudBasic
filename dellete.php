<?php
include "lib/connect.php";

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    $statement = $conn->prepare("DELETE FROM table1 WHERE id = ?");
    $statement->bind_param("i", $id);

    if($statement->execute()) {
        echo "<script>alert('data delleted successfuly');
        window.location.href='index.php'</script>";
    } else {
        echo "<script>alert('failed to dellete data');
        window.location.href='index.php'</script>";
    }
}
?>