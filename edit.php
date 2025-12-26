<?php
include 'dbconnect.php';

if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $query = "SELECT * FROM student_details WHERE id=$id";
    $result = mysqli_query($conn, $query);
    $data = mysqli_fetch_assoc($result);
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $stream = $_POST['stream'];
    $state = $_POST['state'];

    $update = "UPDATE student_details 
               SET name='$name', email='$email', phone='$phone', stream='$stream', state='$state' 
               WHERE id=$id";
    if (mysqli_query($conn, $update)) {
        echo "<script>alert('Record updated successfully!'); window.location.href='table.php';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit Student</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(135deg, #f8b500, #fceabb);
      font-family: 'Poppins', sans-serif;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0;
    }

    .card {
      background: #fff;
      border: none;
      border-radius: 20px;
      box-shadow: 0 6px 25px rgba(0, 0, 0, 0.15);
      width: 90%;
      max-width: 600px;
      padding: 35px 40px;
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

    label {
      font-weight: 600;
      color: #444;
    }

    .form-control, .form-select {
      border-radius: 10px;
      border: 1px solid #ddd;
      padding: 10px;
      transition: border-color 0.3s, box-shadow 0.3s;
    }

    .form-control:focus, .form-select:focus {
      border-color: #ff7e5f;
      box-shadow: 0 0 0 0.15rem rgba(255, 126, 95, 0.25);
    }

    .btn-success {
      background: linear-gradient(135deg, #4CAF50, #81C784);
      border: none;
      border-radius: 10px;
      font-weight: 600;
      text-transform: uppercase;
      transition: all 0.3s ease;
    }

    .btn-success:hover {
      background: linear-gradient(135deg, #388E3C, #66BB6A);
      transform: translateY(-2px);
    }

    .btn-secondary {
      background: linear-gradient(135deg, #9e9e9e, #bdbdbd);
      border: none;
      border-radius: 10px;
      font-weight: 600;
      text-transform: uppercase;
      transition: all 0.3s ease;
    }

    .btn-secondary:hover {
      background: linear-gradient(135deg, #757575, #9e9e9e);
      transform: translateY(-2px);
    }

    .text-center {
      margin-top: 25px;
    }

    @media (max-width: 576px) {
      .card {
        padding: 25px;
      }
    }
  </style>
</head>
<body>
  <div class="card">
    <h3>Edit Student Details</h3>
    <form method="post">
      <input type="hidden" name="id" value="<?php echo $data['id']; ?>">

      <div class="mb-3">
        <label>Name</label>
        <input type="text" name="name" class="form-control" value="<?php echo $data['name']; ?>" required>
      </div>

      <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control" value="<?php echo $data['email']; ?>" required>
      </div>

      <div class="mb-3">
        <label>Phone</label>
        <input type="tel" name="phone" class="form-control" value="<?php echo $data['phone']; ?>" required>
      </div>

      <div class="mb-3">
        <label>Stream</label>
        <select name="stream" class="form-select" required>
          <option value="">Select Stream</option>
          <option value="PCM" <?php if($data['stream']=='PCM') echo 'selected'; ?>>PCM</option>
          <option value="PCB" <?php if($data['stream']=='PCB') echo 'selected'; ?>>PCB</option>
          <option value="Commerce" <?php if($data['stream']=='Commerce') echo 'selected'; ?>>Commerce</option>
          <option value="Arts" <?php if($data['stream']=='Arts') echo 'selected'; ?>>Arts</option>
        </select>
      </div>

      <div class="mb-3">
        <label>State</label>
        <select name="state" class="form-select" required>
          <option value="">Select State</option>
          <option value="Andhra Pradesh" <?php if($data['state']=='Andhra Pradesh') echo 'selected'; ?>>Andhra Pradesh</option>
          <option value="Tamil Nadu" <?php if($data['state']=='Tamil Nadu') echo 'selected'; ?>>Tamil Nadu</option>
          <option value="Kerala" <?php if($data['state']=='Kerala') echo 'selected'; ?>>Kerala</option>
          <option value="Karnataka" <?php if($data['state']=='Karnataka') echo 'selected'; ?>>Karnataka</option>
          <option value="Maharashtra" <?php if($data['state']=='Maharashtra') echo 'selected'; ?>>Maharashtra</option>
          <option value="Delhi" <?php if($data['state']=='Delhi') echo 'selected'; ?>>Delhi</option>
        </select>
      </div>

      <div class="text-center">
        <button type="submit" name="update" class="btn btn-success px-4 me-2">Update</button>
        <a href="table.php" class="btn btn-secondary px-4">Cancel</a>
      </div>
    </form>
  </div>
</body>
</html>
