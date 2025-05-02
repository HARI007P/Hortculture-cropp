<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-image: url('{{ asset('images/login.jpg') }}');
      background-repeat: no-repeat;
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
      background: linear-gradient(90deg, #007bff, #0056b3);
      color: white;
      border: none;
      border-radius: 6px;
      font-size: 16px;
      cursor: pointer;
      transition: background 0.3s ease;
      width: 100%;
    }

    .btn:hover {
      background: linear-gradient(90deg, #0056b3, #003f7f);
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
    <h2>Login</h2>
    <input type="text" id="email" placeholder="Email"><br>
    <input type="password" id="password" placeholder="Password"><br>
    <button class="btn" onclick="login()">Login</button><br><br>
    <a href="/register">Don't have an account? Register</a>
  </div>

  <script>
    function login() {
      const email = document.getElementById("email").value;
      const password = document.getElementById("password").value;
      const storedUser = JSON.parse(localStorage.getItem(email));

      if (storedUser && storedUser.password === password) {
        alert("Login successful!");
        localStorage.setItem("loggedIn", "true");
        localStorage.setItem("currentUser", JSON.stringify(storedUser));
        window.location.href = "/"; // Redirect to Laravel home
      } else {
        alert("Invalid credentials!");
      }
    }
  </script>
</body>
</html>
