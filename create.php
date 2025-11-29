<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
    
    <title>Add New Book</title>

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

        .btn-primary, .btn-outline-primary {
            padding: 8px 16px;
            border-radius: 8px;
        }
    </style>
</head>

<body>

    <div class="container col-md-6">

        <!-- Header same as EDIT BOOK -->
        <header class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="m-0">Add New Book</h1>
            <a href="index.php" class="btn btn-primary">Back</a>
        </header>

        <div class="edit-box">

            <form action="process.php" method="post">

                <div class="mb-3">
                    <label class="form-label">Book Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Enter book title">
                </div>

                <div class="mb-3">
                    <label class="form-label">Author Name</label>
                    <input type="text" class="form-control" name="author" placeholder="Enter author name">
                </div>

                <div class="mb-3">
                    <label class="form-label">Book Type</label>
                    <select name="type" class="form-control">
                        <option value="">Select Book Type</option>
                        <option value="Adventure">Adventure</option>
                        <option value="Fantacy">Fantacy</option>
                        <option value="Scifi">Scifi</option>
                        <option value="Horror">Horror</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Book Description</label>
                    <input type="text" class="form-control" name="description" placeholder="Enter description">
                </div>

                <div class="text-end">
                    <input type="submit" class="btn btn-success" name="create" value="Add Book">
                </div>

            </form>

        </div>
    </div>

</body>
</html>
