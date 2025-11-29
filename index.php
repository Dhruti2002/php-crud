<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" 
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <title>Book List</title>

    <style>
        body {
            background: linear-gradient(135deg, #e3f2fd, #fce4ec);
            min-height: 100vh;
            padding-top: 40px;
        }

        .table-box {
            background: #fff;
            border-radius: 12px;
            padding: 25px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
        }

        .header-title {
            font-size: 32px;
            font-weight: 600;
        }
    </style>
</head>

<body>
    <div class="container col-md-10">

        <header class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="header-title m-0">Book List</h1>
            <a href="create.php" class="btn btn-primary">Add New Book</a>
        </header>

        <?php
        session_Start();
        if (isset($_SESSION['create'])) {
        ?>
            <div class="alert alert-success"><?php echo $_SESSION['create']; unset($_SESSION['create']); ?></div>
        <?php } ?>

        <?php
        if (isset($_SESSION['edit'])) {
        ?>
            <div class="alert alert-success"><?php echo $_SESSION['edit']; unset($_SESSION['edit']); ?></div>
        <?php } ?>

        <?php
        if (isset($_SESSION['delete'])) {
        ?>
            <div class="alert alert-danger"><?php echo $_SESSION['delete']; unset($_SESSION['delete']); ?></div>
        <?php } ?>

        <div class="table-box">
            <table class="table table-bordered align-middle">
                <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Type</th>
                        <th width="220">Actions</th>
                    </tr>
                </thead>
                <tbody>

                <?php
                include('connect.php');
                $query = "SELECT * FROM books";
                $result = mysqli_query($conn, $query);

                while ($row = mysqli_fetch_array($result)) {
                ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['title']; ?></td>
                        <td><?php echo $row['author']; ?></td>
                        <td><?php echo $row['type']; ?></td>
                        <td>
                            <a href="view.php?id=<?php echo $row["id"]; ?>" class="btn btn-info btn-sm">Read More</a>
                            <a href="edit.php?id=<?php echo $row["id"]; ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="delete.php?id=<?php echo $row["id"]; ?>" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                <?php } ?>

                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
