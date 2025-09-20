<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Student Registration</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f3f3f3;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    form {
      background: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.2);
      width: 300px;
    }
    h2 {
      text-align: center;
    }
    input, button {
      width: 100%;
      padding: 10px;
      margin: 8px 0;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    button {
      background: #4CAF50;
      color: white;
      cursor: pointer;
      border: none;
    }
    button:hover {
      background: #45a049;
    }
    .clear-btn {
      background: red;
    }
  </style>
</head>
<body>
  <form action="save.php" method="post">
    <h2>Student Registration</h2>
    <input type="text" name="name" placeholder="Full Name" required>
    <input type="text" name="student_id" placeholder="Student ID" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="text" name="course" placeholder="Course" required>

    <button type="submit" name="register">Register</button>
    <button type="submit" name="clear" class="clear-btn">Clear File</button>
  </form>
</body>
</html>
