<?php
include 'connect.php';

// Check if there is data sent
$query = "INSERT INTO tb_book (title, writer, release_date) VALUES ('$_POST[title]', '$_POST[writer]', '$_POST[release_date]')";
if (isset($_POST['create'])) {



    // Define query to insert data
    mysqli_query($conn, $query);

    if (mysqli_affected_rows($conn) > 0) {
        header("location: catalog_book.php");
    } else {
        echo "<script>alert('Data failed to be Added');</script>";
    }
}
?>