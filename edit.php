<?php
include "lib/connect.php";
if(!isset($_GET['id'])) {
    header("Location: index.php");
    exit;
}
$id = $_GET['id'];
$query = "SELECT * FROM table1 WHERE id = $id";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body class="bg-primary-subtle">
    <div class="mainWrap d-flex justify-content-center align-items-center vh-100">
        <div class="card border-0 shadow-lg" style="width: 400px;">
            <div class="card-header">
                <h3>Edit Data</h3>
            </div>
            <div class="card-body">
                <form action="update.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                    <div class="mb-3">
                        <label for="varchar1" class="form-label">varchar1</label>
                        <input type="text" class="form-control" id="varchar1" name="varchar1" value="<?php echo $data['varchar1']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="varchar2" class="form-label">varchar2</label>
                        <input type="text" class="form-control" id="varchar2" name="varchar2" value="<?php echo $data['varchar2']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="text" class="form-label">text</label>
                        <input type="text" class="form-control" id="text" name="text" value="<?php echo $data['text']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="date" class="form-label">date</label>
                        <input type="date" class="form-control" id="date" name="date" value="<?php echo $data['date']; ?>" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>