<?php
session_start();
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        $error = "⚠️ All fields are required!";
    } elseif ($username === "student" && $password === "1234") {
        $_SESSION['username'] = $username;
        header("Location: index.php"); // redirect to resume
        exit();
    } else {
        $error = "❌ Invalid username or password!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <!-- Font Awesome for eye icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background: linear-gradient(135deg, #1e1e1e, #121212);
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-box {
            background: #1c1c1c;
            padding: 40px 30px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.7);
            width: 350px;
            text-align: center;
            animation: fadeIn 1s ease-in-out;
        }
        @keyframes fadeIn {
            from {opacity: 0; transform: translateY(-20px);}
            to {opacity: 1; transform: translateY(0);}
        }
        @keyframes shake {
            0% { transform: translateX(0); }
            25% { transform: translateX(-8px); }
            50% { transform: translateX(8px); }
            75% { transform: translateX(-8px); }
            100% { transform: translateX(0); }
        }
        .login-box h2 {
            color: #4CAF50;
            margin-bottom: 20px;
            font-size: 26px;
            font-weight: 600;
        }
        .input-container {
            position: relative;
            width: 85%;
            margin: 10px auto;
        }
        .input-container input {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 6px;
            background: #2c2c2c;
            color: #fff;
            font-size: 14px;
        }
        .input-container input:focus {
            outline: 2px solid #4CAF50;
        }
        .toggle-password {
            position: absolute;
            top: 50%;
            right: 12px;
            transform: translateY(-50%);
            cursor: pointer;
            font-size: 16px;
            color: #aaa;
        }
        .toggle-password:hover {
            color: #4CAF50;
        }
        .login-box button {
            padding: 12px 40px;
            background: #4CAF50;
            border: none;
            border-radius: 6px;
            color: white;
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
            transition: 0.3s;
            margin-top: 15px;
        }
        .login-box button:hover {
            background: #66bb6a;
            transform: scale(1.05);
        }
        .error-box {
            margin-top: 15px;
            padding: 12px;
            border-radius: 6px;
            background: #2c2c2c;
            color: #e53935;
            font-size: 14px;
            font-weight: 500;
            animation: shake 0.3s;
            border-left: 4px solid #e53935;
        }
    </style>
</head>
<body>
    <div class="login-box">
        <h2>Login</h2>
        <form method="POST">
            <div class="input-container">
                <input type="text" name="username" placeholder="Enter username">
            </div>
            <div class="input-container">
                <input type="password" name="password" id="password" placeholder="Enter password">
                <i class="fa-solid fa-eye toggle-password" onclick="togglePassword()" id="toggleIcon"></i>
            </div>
            <button type="submit">Login</button>
        </form>

        <?php if (!empty($error)) echo "<div class='error-box'>$error</div>"; ?>
    </div>

    <script>
        function togglePassword() {
            const pass = document.getElementById("password");
            const icon = document.getElementById("toggleIcon");
            if (pass.type === "password") {
                pass.type = "text";
                icon.classList.remove("fa-eye");
                icon.classList.add("fa-eye-slash");
            } else {
                pass.type = "password";
                icon.classList.remove("fa-eye-slash");
                icon.classList.add("fa-eye");
            }
        }
    </script>
</body>
</html>
