<?php
include "layout/header.php";
include "layout/footer.php";
include "lib/connect.php";

$sql = "SELECT * FROM table1";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="mainWrap container mt-5">
    <div class="top justify-content-between d-flex align-items-center mb-4">
        <h1>table1</h1>
        <a href="insert.php" class="btn btn-primary">ADD +</a>
    </div>

    <div class="mainContent">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">varchar1</th>
                    <th scope="col">varchar2</th>
                    <th scope="col">text</th>
                    <th scope="col">date</th>
                    <th scope="col">action</th>
                </tr>
            </thead>

            <tbody>
                <?php if(mysqli_num_rows($result) > 0): 
                     while ($row = mysqli_fetch_assoc($result)): ?> 
                        <tr>
                        <td><?= $row['id']; ?></td>
                        <td><?= $row['varchar1']; ?></td>
                        <td><?= $row['varchar2']; ?></td>
                        <td><?= $row['text1']; ?></td>
                        <td><?= $row['date']; ?></td>
                        <td> <a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-primary">Edit</a>
                        <a href="dellete.php?id=<?= $row['id']; ?>" class="btn btn-secondary"  onclick="return confirm('Are you sure?')">Dellete</a></td>
                        </tr>

                        <?php endwhile; ?>

                        <?php else: ?>
                            <tr>
                                <td colspan="6" class="text-center">
                                    Cannot find any data
                                </td>
                            </tr>
                            <?php endif;?>
            </tbody>

        </table>
    </div>
    </div>
</body>
</html>