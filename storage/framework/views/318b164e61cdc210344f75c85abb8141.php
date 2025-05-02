<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Register</title>
  <link rel="stylesheet" href="../css/app.css">
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-image: url('https://images.unsplash.com/photo-1508780709619-79562169bc64?auto=format&fit=crop&w=1600&q=80');
      background-size: cover;
      background-position: center;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .container {
      background-color: rgba(255, 255, 255, 0.95);
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
      text-align: center;
      width: 320px;
    }

    h2 {
      font-size: 28px;
      margin-bottom: 20px;
      color: #333;
    }

    input {
      margin: 10px 0;
      padding: 12px;
      width: 100%;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 16px;
    }

    .btn {
      padding: 12px 20px;
      background: linear-gradient(90deg, #28a745, #218838);
      color: white;
      border: none;
      border-radius: 6px;
      font-size: 16px;
      cursor: pointer;
      transition: background 0.3s ease;
      width: 100%;
    }

    .btn:hover {
      background: linear-gradient(90deg, #218838, #1e7e34);
    }

    a {
      color: #007bff;
      text-decoration: none;
      font-size: 14px;
    }

    a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Register</h2>
    <input type="text" id="name" placeholder="Full Name"><br>
    <input type="text" id="email" placeholder="Email"><br>
    <input type="password" id="password" placeholder="Password"><br>
    <button class="btn" onclick="register()">Register</button><br><br>
    <a href="/login">Already have an account? Login</a>
  </div>

  <script>
    function register() {
      const name = document.getElementById("name").value;
      const email = document.getElementById("email").value;
      const password = document.getElementById("password").value;

      const user = { name: name, password: password };
      localStorage.setItem(email, JSON.stringify(user));
      localStorage.setItem("loggedIn", "true");
      localStorage.setItem("currentUser", JSON.stringify({ email, name }));

      alert("Registered Successfully!");
      window.location.href = "/";
    }
  </script>
</body>
</html>
<?php /**PATH C:\Users\hari0\OneDrive\Desktop\project\Horticultural-Crop\agri-platform\resources\views/auth/register.blade.php ENDPATH**/ ?>