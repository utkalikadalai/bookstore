<?php require "header.php" ?>
<?php require "db.php";
    $query="select * from book";
    $result = $con -> query($query);
?>


<body style="background-color:cadetblue;">
    <div class="container">
        <div class="card mt-5">
            <div class="card-header d-flex justify-content-between">
                <h2>All Books</h2>
                <a href="create.php" class="btn btn-success text-white">ADD BOOK</a>
            </div>
            <div class="card-body">
                <?php if($result){?>
                <table class="table table-borderless">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Author</th>
                        <th>Publisher</th>
                        <th>Action</th>
                    </tr>
                    <?php while($book = mysqli_fetch_array($result)){ ?>
                    <tr>
                        <td><?= $book['id']; ?></td>
                        <td><?= $book['name']; ?></td>
                        <td><?= $book['author']; ?></td>
                        <td><?= $book['publisher'] ?></td>
                        <td>
                            <a href="edit.php?id=<?= $book['id']; ?>" class= "btn btn-info">EDIT</a>
                            <a href="delete.php?id=<?= $book['id']; ?>" class = "btn btn-danger">DELETE</a>
                        </td>
                    </tr>
                    <?php }?>
                </table>
                <?php }?>
            </div>
        </div>
    </div>
    <?php require 'footer.php';?>