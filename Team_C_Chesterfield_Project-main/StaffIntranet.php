<!DOCTYPE html>
<html lang="en">
<?php include 'include/style.php'; ?>
<meta charset="UTF-8">
    
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Selection</title>
</head>

<header>
    <div class = "nav-bar">
   <?php include 'include/nav2.php'; ?>

<!DOCTYPE html>
<html lang="en">

<body>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
        }

        .button {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin: 5px;
            transition: background-color 0.3s;
        }

        .button:hover {
            background-color: #0056b3;
        }
    </style>
    <div class="container">
        <h2>Select Your Role</h2>
        <button class="button" onclick="window.location.href='staff_login.php'">Staff Login</button>
        <button class="button" onclick="window.location.href='admin_login.php'">Admin Login</button>
    </div>
</body>
</html>
