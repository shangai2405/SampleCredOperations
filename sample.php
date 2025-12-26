<?php
include 'dbconnect.php';

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $stream = mysqli_real_escape_string($conn, $_POST['stream']);
    $state = mysqli_real_escape_string($conn, $_POST['state']);


    $sql = "INSERT INTO student(name, email, phone, stream, state)
            VALUES ('$name', '$email', '$phone', '$stream', '$state')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<script>alert('Value inserted successfully!');</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Enquiry Form</title>
  <style>
    body {
      background-color: #f9f9f9;
      font-family: "Open Sans", sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }
    .form-crd {
      background: #fff;
      border-radius: 10px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
      width: 350px;
      padding: 25px 30px;
    }
    .form-crd p {
      text-align: center;
      text-decoration: underline;
      color: #656464;
      font-size: 22px;
      font-weight: 600;
      margin-bottom: 25px;
    }
    .crd-form-elements {
      display: flex;
      flex-direction: column;
      gap: 15px;
    }
    .form-control,
    select {
      width: 100%;
      padding: 10px 12px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 16px;
      outline: none;
      transition: 0.3s;
    }
    .form-control:focus,
    select:focus {
      border-color: #e65520;
      box-shadow: 0 0 4px rgba(230, 85, 32, 0.4);
    }
    .input-group {
      display: flex;
      align-items: center;
    }
    .input-group-text {
      background-color: #eee;
      border: 1px solid #ccc;
      border-right: none;
      padding: 10px;
      border-radius: 6px 0 0 6px;
      font-size: 16px;
      color: #555;
    }
    .input-group input {
      flex: 1;
      border: 1px solid #ccc;
      border-left: none;
      border-radius: 0 6px 6px 0;
      padding: 10px 12px;
      font-size: 16px;
      outline: none;
    }
    .form-submit-button {
      background-color: #e65520;
      color: #fff;
      font-weight: bold;
      border: none;
      border-radius: 6px;
      font-size: 18px;
      padding: 12px;
      margin-top: 10px;
      cursor: pointer;
      transition: background-color 0.3s;
    }
    .form-submit-button:hover {
      background-color: #b8441a;
    }
  </style>
</head>
<body>
  <div class="form-crd">
    <p>Enquire Now</p>
    <form action="" method="post" class="crd-form-elements">
      <input name="name" type="text" class="form-control" placeholder="Name *" required />
      <input name="email" type="email" class="form-control" placeholder="Email *" required />

      <div class="input-group tel">
        <span class="input-group-text">+91</span>
        <input name="phone" type="tel" class="form-control" placeholder="Phone Number *" required />
      </div>

      <select name="stream" class="form-control" required>
        <option value="">Select Stream *</option>
        <option value="PCM">PCM</option>
        <option value="PCB">PCB</option>
        <option value="Commerce">Commerce</option>
        <option value="Arts">Arts</option>
      </select>

      <select name="state" class="form-control" required>
        <option value="">Select Present State *</option>
        <option value="Andhra Pradesh">Andhra Pradesh</option>
        <option value="Tamil Nadu">Tamil Nadu</option>
        <option value="Kerala">Kerala</option>
        <option value="Karnataka">Karnataka</option>
        <option value="Maharashtra">Maharashtra</option>
        <option value="Delhi">Delhi</option>
      </select>
      <button type="submit" name="submit" class="form-submit-button">Submit</button>
    </form>
  </div>
</body>
</html>