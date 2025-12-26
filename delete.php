<?php
include 'dbconnect.php';

if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);

    $query = "DELETE FROM student_details WHERE id=$id";
    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Record deleted successfully!'); window.location.href='table.php';</script>";
    } else {
        echo "<script>alert('Error deleting record: " . mysqli_error($conn) . "'); window.location.href='table.php';</script>";
    }
} else {
    echo "<script>alert('Invalid request!'); window.location.href='table.php';</script>";
}
?>
