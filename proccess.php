<?php 
include "lib/connect.php";
 if(isset($_POST['save'])) {
    $Varchar1 = $_POST['varchar1'];
    $Varchar2 = $_POST['varchar2'];
    $Text1= $_POST['text1'];
    $Date = $_POST['date'];

    $statement = $conn->prepare("INSERT INTO table1 (varchar1, varchar2, text1, date) VALUES(?,?,?,?)");

    $statement->bind_Param("ssss", $Varchar1, $Varchar2, $Text1, $Date);

    if($statement->execute()) {
        echo "<script>alert('data saved successfuly');
        window.location.href='index.php'</script>";
    } else {
        echo "<script>alert('failed to save data');
        window.location.href='index.php'</script>";
    }

    $statement->close();
    $conn->close();
 }
?>