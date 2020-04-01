<?php
require 'db.php';

//fetch from DB before update
$id   =$_GET['id'];
$sql = "SELECT *FROM book WHERE id=$id";
$res = $con->query($sql);
$book = mysqli_fetch_array($res);

$message = '';
if (isset ($_POST['name'])  && isset ($_POST['author']) && isset ($_POST['publisher'])) {

    //Get values from form
    $name = $_POST['name'];
    $author = $_POST['author'];
    $publisher = $_POST['publisher'];

    //update in DB
    $query="update book set name = '$name', author= '$author', publisher = '$publisher' where id = '$id'";
    $result = $con -> query($query);

    //fetch from DB after update
    $sql = "SELECT *FROM book WHERE id=$id";
    $res = $con->query($sql);
    $book = mysqli_fetch_array($res);

    if($result){
        $message = 'Book updated successfully';
    }
}
?>


<?php require 'header.php';?>

<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <h2>UPDATE A BOOK</h2>
        </div>
        <div class="card-body">
            <?php if(!empty($message)):?>
            <div class="alert alert-success" role="alert">
                <?= $message ?>
            </div>
            <?php endif; ?>
            <form method="post">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input  value ="<?= $book['name']; ?>" id="name" class="form-control" type="text" name="name">
                </div>
                <div class="form-group">
                    <label for="author">Author</label>
                    <input value ="<?= $book['author']; ?>" id="author" class="form-control" type="text" name="author">
                </div>
                <div class="form-group">
                    <label for="publisher">Publisher</label>
                    <input value ="<?= $book['publisher']; ?>" id="publisher" class="form-control" type="text" name="publisher">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-info">Update Book</button>
                    <a href="index.php" class="btn btn-success">HOME</a>
                </div>
            </form>  
        </div>
    </div>
</div>
<?php require 'footer.php'; ?>