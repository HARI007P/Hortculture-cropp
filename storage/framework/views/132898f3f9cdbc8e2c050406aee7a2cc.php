<!DOCTYPE html>
<html>
<head>
    <title>Horticultural</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="<?php echo e(asset('css/styles.css')); ?>">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: rgb(53, 165, 49);
            padding: 10px 20px;
        }

        .nav-left {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .nav-left a {
            color: #fff;
            text-decoration: none;
        }

        .nav-right {
            position: relative;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .nav-right a, .nav-right span {
            color: #fff;
            text-decoration: none;
            cursor: pointer;
        }

        .dropdown {
            position: absolute;
            top: 35px;
            right: 0;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            display: none;
            flex-direction: column;
            min-width: 160px;
            z-index: 1000;
        }

        .dropdown a {
            color: #333;
            padding: 10px;
            text-decoration: none;
            border-bottom: 1px solid #eee;
        }

        .dropdown a:last-child {
            border-bottom: none;
        }

        .dropdown a:hover {
            background-color: #f1f1f1;
        }

        .user-menu {
            display: flex;
            align-items: center;
            gap: 8px;
        }
    </style>
</head>
<body>
<nav>
    <div class="nav-left">
        <a href="/">
            <img src="<?php echo e(asset('images/farmer1.jpg')); ?>" alt="AgriValue+" style="height:50px;">
        </a>
        <div class="nav-links">
            <a href="/">Home</a>
            <a href="/crops">Crops</a>
            <a href="/markets">Markets</a>
            <a href="/storages">Storage</a>
        </div>
    </div>
    
    <div class="nav-right" id="navRight">
        <!-- JS will inject content here -->
    </div>
</nav>

<div class="container">
    <?php echo $__env->yieldContent('content'); ?>
</div>

<?php echo $__env->make('layouts.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<script>
  const navRight = document.getElementById('navRight');
  const user = JSON.parse(localStorage.getItem("currentUser"));
  const isLoggedIn = localStorage.getItem("loggedIn");

  if (isLoggedIn && user && user.name) {
    navRight.innerHTML = `
      <div class="user-menu" onclick="toggleDropdown()" style="cursor: pointer;">
        <i class="fas fa-user"></i><span>${user.name}</span>
      </div>
      <div class="dropdown" id="userDropdown">
        <a href="/profile">Profile</a>

        

        <a onclick="logout()">Logout</a>
      </div>
    `;
  } else {
    navRight.innerHTML = `
      <a href="/login">Login</a>
      <a href="/register">Register</a>
    `;
  }

  function logout() {
    localStorage.removeItem("loggedIn");
    localStorage.removeItem("currentUser");
    location.reload();
  }

  function toggleDropdown() {
    const dropdown = document.getElementById("userDropdown");
    dropdown.style.display = dropdown.style.display === "flex" ? "none" : "flex";
  }

  // Close dropdown on outside click
  window.addEventListener("click", function(e) {
    const dropdown = document.getElementById("userDropdown");
    const userMenu = document.querySelector(".user-menu");
    if (!userMenu.contains(e.target)) {
      dropdown.style.display = "none";
    }
  });
</script>
</body>
</html>
<?php /**PATH C:\Users\hari0\OneDrive\Desktop\project\Horticultural-Crop\agri-platform\resources\views/layouts/app.blade.php ENDPATH**/ ?>