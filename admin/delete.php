<?php
include("connect.php");

$id = $_GET['id']; 

$sql = "DELETE FROM article WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
header("Location: article_admin.php");
?> 