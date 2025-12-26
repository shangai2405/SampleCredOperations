<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'dbconnect.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $stream = $_POST['stream'];
    $state = $_POST['state'];


    $check = "SELECT * FROM student_details WHERE email='$email'";
    $res = mysqli_query($conn, $check);

    if (mysqli_num_rows($res) > 0) {
        echo "<script>alert('Error: Email already exists!'); window.history.back();</script>";
    } else {
        $sql = "INSERT INTO student_details (name, email, phone, stream, state)
                VALUES ('$name', '$email', '$phone', '$stream', '$state')";

        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Value inserted successfully!'); window.location.href='table.php';</script>";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
}
?>
