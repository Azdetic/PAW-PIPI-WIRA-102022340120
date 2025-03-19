<?php
include 'connect.php';

// ==================1==================
// Definisikan query untuk mengambil semua data tb_book
// Define the query to get all tb_book data
$query = "SELECT * FROM tb_book";
$result = mysqli_query($conn, $query);

$tb_book = [];
while ($row = mysqli_fetch_assoc($result)) {
    $tb_book[] = $row;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tb_book Catalog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <?php include 'navbar.php'; ?>
    <div class="container mt-5">
        <h1>tb_book Catalog</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                  <th>No</th>
                  <th>Title</th>
                  <th>Writer</th>
                  <th>Year</th>
                  <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if (count($tb_book) == 0) : ?>
                    <tr>
                        <th colspan="7" class="text-center">NO DATA</th>
                    </tr>
                <?php endif;?>
                <?php foreach ($tb_book as $tb_book) : ?>
                    <tr>
                        <!-- ==================2================== -->
                        <!-- Buatlah kolom untuk masing-masing variabel pada $tb_book -->
                        <td><?= $tb_book['id'] ?></td>
                        <td><?= $tb_book['title'] ?></td>
                        <td><?= $tb_book['writer'] ?></td>
                        <td><?= $tb_book['publishing_year'] ?></td>
                        <td>
                            <a href="edit_book.php?id=<?= $tb_book['id'] ?>" class="btn btn-primary">Edit</a>
                            <a href="delete.php?id=<?= $tb_book['id'] ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php endforeach?>
            </tbody>
        </table>
    </div>

</body>
</html>

