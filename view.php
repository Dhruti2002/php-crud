<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <title>Book Details</title>

    <style>
        body {
            background: linear-gradient(135deg, #e3f2fd, #fce4ec);
            min-height: 100vh;
            padding-top: 40px;
        }

        .details-box {
            background: #fff;
            border-radius: 14px;
            padding: 35px 40px;
            box-shadow: 0 4px 18px rgba(0,0,0,0.07);
        }

        h1 {
            font-size: 32px;
            font-weight: 600;
        }

        h2 {
            font-size: 20px;
            font-weight: 600;
            color: #444;
            margin-top: 25px;
        }

        p {
            font-size: 16px;
            color: #555;
            margin-bottom: 10px;
        }

        .btn-primary {
            border-radius: 8px;
            padding: 7px 16px;
        }
    </style>
</head>

<body>

    <div class="container col-md-8">

        <header class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="m-0">Book Details</h1>
            <a href="index.php" class="btn btn-primary">Back</a>
        </header>

        <div class="details-box">
            <?php
                if(isset($_GET['id'])) {
                    include('connect.php');
                    $id = $_GET['id'];
                    $query = "SELECT * FROM books WHERE id = $id";
                    $result = mysqli_query($conn, $query);
                    $row = mysqli_fetch_array($result);
            ?>

                <h2>Title</h2>
                <p><?php echo $row['title']; ?></p>

                <h2>Description</h2>
                <p><?php echo $row['description']; ?></p>

                <h2>Type</h2>
                <p><?php echo $row['type']; ?></p>

                <h2>Author</h2>
                <p><?php echo $row['author']; ?></p>

            <?php } ?>
        </div>

    </div>

</body>
</html>
