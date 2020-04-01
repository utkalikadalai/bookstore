<?php 
require 'db.php';

$message ='';
$id=$_GET['id'];
$query = "DELETE FROM book where id='$id'";
$result = $con->query($query);
if ($result){
    header("Location: /");
}
