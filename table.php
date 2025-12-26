<?php
include 'dbconnect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Records</title>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #fceabb, #f8b500);
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: flex-start;
      min-height: 100vh;
    }

    .container {
      background: #fff;
      margin-top: 50px;
      padding: 30px 40px;
      border-radius: 20px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.2);
      width: 90%;
      max-width: 1000px;
    }

    h2 {
      text-align: center;
      color: #ff7e5f;
      font-size: 28px;
      letter-spacing: 1px;
      margin-bottom: 25px;
      text-transform: uppercase;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      text-align: center;
      overflow: hidden;
      border-radius: 10px;
    }

    th {
      background: linear-gradient(135deg, #ff7e5f, #feb47b);
      color: white;
      text-transform: uppercase;
      letter-spacing: 1px;
      font-size: 14px;
      padding: 12px;
    }

    td {
      padding: 10px;
      background: #fff;
      border-bottom: 1px solid #ddd;
      transition: background 0.3s;
    }

    tr:hover td {
      background: #fff3e0;
    }

    .edit-btn {
  background: #4CAF50;
}

.view-btn {
  background: #2196F3;
}

.delete-btn {
  background: #f44336;
}

a {
  text-decoration: none;
  color: white;
  font-weight: 600;
  padding: 6px 12px;
  border-radius: 8px;
  transition: 0.3s;
  display: inline-block;
}

a:hover {
  opacity: 0.85;
  transform: scale(1.05);
}


    @media (max-width: 700px) {
      table, thead, tbody, th, td, tr {
        display: block;
      }

      th {
        display: none;
      }

      td {
        position: relative;
        padding-left: 50%;
        text-align: left;
        border: none;
        border-bottom: 1px solid #eee;
      }

      td:before {
        position: absolute;
        left: 10px;
        width: 45%;
        padding-right: 10px;
        white-space: nowrap;
        font-weight: bold;
        color: #555;
        content: attr(data-label);
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Student Details</h2>
    <table>
      <tr>
        <th>S.No</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Edit</th>
        <th>View</th>
        <th>Delete</th>
      </tr>

      <?php
      $query = "SELECT * FROM student_details";
      $x = mysqli_query($conn, $query);
      $sno = 1;
      while ($data = mysqli_fetch_assoc($x)) {
      ?>
        <tr>
        <td><?php echo $sno++; ?></td> 
          <td data-label="Name"><?php echo $data['name']; ?></td>
          <td data-label="Email"><?php echo $data['email']; ?></td>
          <td data-label="Phone"><?php echo $data['phone']; ?></td>
          <td><a href="edit.php?edit=<?php echo $data['id']; ?>" class="edit-btn">Edit</a></td>
          <td><a href="view.php?view=<?php echo $data['id']; ?>" class="view-btn">View</a></td>
          <td><a href="delete.php?delete=<?php echo $data['id']; ?>" class="delete-btn" onclick="return confirm('Are you sure?')">Delete</a></td>
        </tr>
      <?php } ?>
    </table>
  </div>
</body>
</html>
