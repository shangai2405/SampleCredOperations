<?php include 'dbconnect.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Enquiry Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(135deg, #ff7e5f, #feb47b);
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      font-family: "Poppins", sans-serif;
    }
    .card {
      border: 2px solid #f1a06d; /* 🔸Visible border */
      border-radius: 15px;
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
      width: 420px;
      animation: fadeIn 0.7s ease-in-out;
      background: #fff;
    }
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(25px); }
      to { opacity: 1; transform: translateY(0); }
    }
    .card-header {
      background: linear-gradient(135deg, #ff7e5f, #feb47b);
      color: white;
      text-align: center;
      font-size: 22px;
      font-weight: 600;
      border-top-left-radius: 15px;
      border-top-right-radius: 15px;
      padding: 15px 0;
    }
    .form-control, select {
      border-radius: 8px;
      padding: 10px 12px;
      border: 1.5px solid #ccc;
    }
    .btn-submit {
      background: linear-gradient(135deg, #ff7e5f, #feb47b);
      border: none;
      color: white;
      font-weight: 600;
      border-radius: 8px;
      transition: 0.3s ease;
    }
    .btn-submit:hover {
      opacity: 0.9;
    }
    .input-group span {
      background-color: #f8f9fa;
      border: 1.5px solid #ccc;
      border-right: none;
      border-radius: 8px 0 0 8px;
      padding: 10px 12px;
      color: #333;
    }
    .form-control:focus {
      box-shadow: 0 0 5px rgba(255, 126, 95, 0.6);
      border-color: #ff7e5f;
    }
  </style>
</head>
<body>
  <div class="card">
    <div class="card-header">Enquire Now</div>
    <div class="card-body p-4">
      <form action="create.php" method="post">
        <div class="mb-3">
          <label class="form-label">Name</label>
          <input name="name" type="text" class="form-control" placeholder="Enter your name" required />
        </div>
        <div class="mb-3">
          <label class="form-label">Email</label>
          <input name="email" type="email" class="form-control" placeholder="Enter your email" required />
        </div>
        <div class="mb-3">
          <label class="form-label">Phone</label>
          <div class="input-group">
            <span>+91</span>
            <input name="phone" type="tel" class="form-control" placeholder="Enter your phone number" required />
          </div>
        </div>
        <div class="mb-3">
          <label class="form-label">Stream</label>
          <select name="stream" class="form-select" required>
            <option value="">Select Stream</option>
            <option value="PCM">PCM</option>
            <option value="PCB">PCB</option>
            <option value="Commerce">Commerce</option>
            <option value="Arts">Arts</option>
          </select>
        </div>
        <div class="mb-4">
          <label class="form-label">Present State</label>
          <select name="state" class="form-select" required>
            <option value="">Select State</option>
            <option value="Andhra Pradesh">Andhra Pradesh</option>
            <option value="Tamil Nadu">Tamil Nadu</option>
            <option value="Kerala">Kerala</option>
            <option value="Karnataka">Karnataka</option>
            <option value="Maharashtra">Maharashtra</option>
            <option value="Delhi">Delhi</option>
          </select>
        </div>
        <div class="text-center">
          <button type="submit" name="submit" class="btn btn-submit px-4 py-2">Submit</button>
        </div>
      </form>
    </div>
  </div>
</body>
</html>
