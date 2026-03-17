<?php
session_start();

if (isset($_SESSION['admin'])) {
    header("Location: admin.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Login - Smart Beauty Salon</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        body{
            margin:0;
            font-family: Arial, sans-serif;
            background: linear-gradient(rgba(0,0,0,0.45), rgba(0,0,0,0.45)), url('images/Salon-banner.jpg');
            background-size: cover;
            background-position: center;
            min-height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
        }

        .login-box{
            background:#fff;
            width:380px;
            padding:30px;
            border-radius:12px;
            box-shadow:0 4px 20px rgba(0,0,0,0.25);
            text-align:center;
        }

        .login-box h2{
            color:#b35c6b;
            margin-bottom:10px;
        }

        .login-box p{
            color:#555;
            margin-bottom:20px;
        }

        .login-box form{
            width:100%;
        }
        
        .login-box input{
            width:100%;
            padding:12px;
            margin:10px 0;
            border:1px solid #ccc;
            border-radius:8px;
            font-size:16px;
            box-sizing:border-box;
            display:block;
        }

        .login-box button{
            width:100%;
            padding:12px;
            background:#b35c6b;
            color:white;
            border:none;
            border-radius:8px;
            font-size:16px;
            cursor:pointer;
        }

        .login-box button:hover{
            background:#944a57;
        }

        .back-link{
            display:block;
            margin-top:15px;
            color:#b35c6b;
            text-decoration:none;
            font-weight:bold;
        }

        .error{
            color:red;
            margin-bottom:10px;
        }
    </style>
</head>
<body>

    <div class="login-box">
        <h2>Smart Beauty Salon</h2>
        <p>Admin Login</p>

        <?php
        if (isset($_GET['error'])) {
            echo "<p class='error'>Invalid username or password</p>";
        }
        ?>

        <form action="login_process.php" method="POST">
            <input type="text" name="username" placeholder="Enter username" required>
            <input type="password" name="password" placeholder="Enter password" required>
            <button type="submit">Login</button>
        </form>

        <a class="back-link" href="index.php">Back to Home</a>
    </div>

</body>
</html>