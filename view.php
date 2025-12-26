<?php
include 'dbconnect.php';

if (isset($_GET['view'])) {
    $id = $_GET['view'];
    $query = "SELECT * FROM student_details WHERE id=$id";
    $result = mysqli_query($conn, $query);
    $view_data = mysqli_fetch_assoc($result);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>View Student</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(135deg, #f8b500, #fceabb);
      font-family: 'Poppins', sans-serif;
      min-height: 100vh;
    }

    .card {
      border: none;
      border-radius: 18px;
      box-shadow: 0 6px 25px rgba(0,0,0,0.15);
      background: #fff;
      max-width: 600px;
      margin: 80px auto;
      padding: 30px 40px;
      transition: 0.3s ease;
    }

    .card:hover {
      transform: scale(1.02);
    }

    .card h3 {
      color: #ff7e5f;
      text-align: center;
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 1px;
      margin-bottom: 25px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      border-radius: 10px;
      overflow: hidden;
    }

    th {
      background: linear-gradient(135deg, #ff7e5f, #feb47b);
      color: white;
      width: 30%;
      text-align: left;
      padding: 12px;
    }

    td {
      background: #fffaf5;
      padding: 12px;
      font-weight: 500;
      color: #333;
    }

    .btn-back {
      display: block;
      width: fit-content;
      margin: 20px auto 0;
      padding: 10px 25px;
      background: #ff7e5f;
      border: none;
      border-radius: 10px;
      color: #fff;
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 0.5px;
      text-decoration: none;
      transition: 0.3s;
    }

    .btn-back:hover {
      background: #feb47b;
      color: white;
      transform: translateY(-2px);
    }
  </style>
</head>
<body>
  <div class="card">
    <h3>Student Details</h3>
    <table class="table table-borderless">
      <tr><th>Name</th><td><?php echo $view_data['name']; ?></td></tr>
      <tr><th>Email</th><td><?php echo $view_data['email']; ?></td></tr>
      <tr><th>Phone</th><td><?php echo $view_data['phone']; ?></td></tr>
      <tr><th>Stream</th><td><?php echo $view_data['stream']; ?></td></tr>
      <tr><th>State</th><td><?php echo $view_data['state']; ?></td></tr>
    </table>
    <a href="table.php" class="btn-back">Back</a>
  </div>
</body>
</html>
