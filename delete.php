<?php
if(isset($_GET['id'])){
    include('connect.php');
    $id = $_GET['id'];
    $query = "DELETE FROM books WHERE id = $id";
    $result = mysqli_query($conn, $query);
    if($result){
        session_start();
        $_SESSION['delete'] = "Book deleted successfully.";
        header("Location: index.php");
    } else {
        echo "Failed to delete book.";
    }
}
?>