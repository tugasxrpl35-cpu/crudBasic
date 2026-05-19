<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body class="bg-primary-subtle">
    <div class="mainWrapper d-flex justify-content-center align-items-center vh-100">
        <div class="card border-0 shadow-lg">
            <div class="card-body p4">
                <h3>Add New Data</h3>
                <form action="proccess.php" method="POST">

                    <div class="form-floating mb-4">
                        <input type="text" class="form-control" name="varchar1" placeholder="data1" required>
                        <label>Data1</label>
                    </div>

                    <div class="form-floating mb-4">
                        <input type="text" class="form-control" name="varchar2" placeholder="data2" required>
                        <label>Data2</label>
                    </div>

                    <div class="form-floating mb-4">
                        <input type="text" class="form-control" name="text1" placeholder="data2" required>
                        <label>Data3</label>
                    </div>

                    <div class="form-floating mb-4">
                        <input type="date" class="form-control" name="date" placeholder="data4" required>
                        <label>Data4</label>
                    </div>

                    <button class="btn btn-primary w-100" type="submit" name="save">Submit</button>

                </form>
            </div>
        </div>
    </div>
</body>
</html>