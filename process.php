<?php
include('connect.php');
if (isset($_POST["create"])) {
    $title = $_POST["title"];
    $author = $_POST["author"];
    $type = $_POST["type"];
    $description = $_POST["description"];

    $query = "INSERT INTO books (title, author, type, description) VALUES ('$title', '$author', '$type', '$description')";
    $result = mysqli_query($conn, $query);
    if ($result) {
        session_start();
        $_SESSION['create'] = "Book added successfully.";
        header("Location: index.php");
    } else {
        echo "Failed to add book.";
    }
}

if (isset($_POST["edit"])) {
    $title = $_POST["title"];
    $author = $_POST["author"];
    $type = $_POST["type"];
    $description = $_POST["description"];
    $id = $_POST["id"];
    $query = "UPDATE books SET title='$title', author='$author', type='$type', description='$description' WHERE id=$id";
    $result = mysqli_query($conn, $query);
    if ($result) {
        session_start();
        $_SESSION['update'] = "Book updated successfully.";
        header("Location: index.php");
    } else {
        echo "Failed to add book.";
    }
}
?>