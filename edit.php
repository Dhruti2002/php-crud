<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <title>Edit Book</title>

    <style>
        body {
            background: linear-gradient(135deg, #e3f2fd, #fce4ec);
            min-height: 100vh;
            padding-top: 40px;
        }

        .edit-box {
            background: #fff;
            padding: 35px;
            border-radius: 14px;
            box-shadow: 0 4px 18px rgba(0,0,0,0.08);
        }

        h1 {
            font-size: 32px;
            font-weight: 600;
        }

        .form-control, select {
            padding: 12px;
            border-radius: 8px;
        }

        .btn-success {
            padding: 10px 20px;
            border-radius: 8px;
        }

        .btn-primary {
            padding: 8px 16px;
            border-radius: 8px;
        }
    </style>
</head>

<body>

    <div class="container col-md-6">

        <header class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="m-0">Edit Book</h1>
            <a href="index.php" class="btn btn-primary">Back</a>
        </header>

        <div class="edit-box">

            <?php
            if(isset($_GET['id'])){
                include('connect.php');
                $id = $_GET['id'];
                $query = "SELECT * FROM books WHERE id = $id";
                $result = mysqli_query($conn, $query);
                $row = mysqli_fetch_array($result);
            ?>

            <form action="process.php" method="post">
                
                <div class="mb-3">
                    <label class="form-label">Book Title</label>
                    <input type="text" class="form-control" name="title"
                           value="<?php echo $row['title']; ?>">
                </div>

                <div class="mb-3">
                    <label class="form-label">Author Name</label>
                    <input type="text" class="form-control" name="author"
                           value="<?php echo $row['author']; ?>">
                </div>

                <div class="mb-3">
                    <label class="form-label">Book Type</label>
                    <select name="type" class="form-control">
                        <option value="">Select Book Type</option>
                        <option value="Adventure" <?php if($row['type']=="Adventure") echo "selected"; ?>>Adventure</option>
                        <option value="Fantacy" <?php if($row['type']=="Fantacy") echo "selected"; ?>>Fantacy</option>
                        <option value="Scifi" <?php if($row['type']=="Scifi") echo "selected"; ?>>Scifi</option>
                        <option value="Horror" <?php if($row['type']=="Horror") echo "selected"; ?>>Horror</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Book Description</label>
                    <input type="text" class="form-control" name="description"
                           value="<?php echo $row['description']; ?>">
                </div>

                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

                <div class="text-end">
                    <input type="submit" class="btn btn-success" name="edit" value="Update Book">
                </div>

            </form>

            <?php } ?>

        </div>
    </div>

</body>
</html>
