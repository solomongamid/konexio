<?php
include("connect.php");

$id = $_GET['id']; 

$sql = "DELETE FROM login WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
header("Location: add_admin.php");
?> 