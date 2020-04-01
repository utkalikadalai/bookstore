<?php
require 'db.php';
$message = '';
if (isset ($_POST['name'])  && isset ($_POST['author']) && isset ($_POST['publisher'])) {
    $name = $_POST['name'];
    $author = $_POST['author'];
    $publisher = $_POST['publisher'];
    $query="insert into book(name, author, publisher)values('$name','$author','$publisher')";
    $result = $con -> query($query);
    if($result){
        $message = 'Book added successfully';
    }
}
?>


<?php require 'header.php';?>

<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <h2>ADD A BOOK</h2>
        </div>
        <div class="card-body">
            <?php if(!empty($message)){?>
            <div class="alert alert-success" role="alert">
                <?= $message ?>
            </div>
            <?php } ?>
            <form method="post">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input id="name" class="form-control" type="text" name="name">
                </div>
                <div class="form-group">
                    <label for="author">Author</label>
                    <input id="author" class="form-control" type="text" name="author">
                </div>
                <div class="form-group">
                    <label for="publisher">Publisher</label>
                    <input id="publisher" class="form-control" type="text" name="publisher">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-info">Add Book</button>
                    <a href="index.php" class="btn btn-success">HOME</a>
                </div>
            </form>  
        </div>
    </div>
</div>
<?php require 'footer.php'; ?>