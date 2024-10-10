<?php
$page_title = "Home Page";
include('includes/header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Login Form</title>
    <style>
        body {
            margin: 0;
            background-color: #e0ffff;
            font-family: Arial, sans-serif;
        }

        .navbar {
            background-color: #007bff;
            color: white;
            padding: 15px;
            text-align: center;
        }

        .navbar a {
            color: white;
            margin: 0 15px;
            text-decoration: none;
        }

        .navbar a:hover {
            text-decoration: underline;
        }

        .about-container {
            display: flex;
            justify-content: center; /* Centers horizontally */
            align-items: center;     /* Centers vertically */
            height: calc(100vh - 80px); /* Adjust for navbar height */
            padding: 20px;
        }

        .content {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: auto;
        }

        h1, h2 {
            color: #333;
        }

        ul {
            list-style-type: square;
            padding-left: 20px;
        }
    </style>
</head>
<body>
    <?php include('includes/navbar.php'); ?>
    <div class="about-container">
        <div class="content">
            <h1><i>About Our Login Form</i></h1>
            <p>Welcome to our login page! Our form allows users to securely access their accounts with ease.</p>
            
            <h2>Key Features</h2>
            <ul>
                <li><strong>Email Verification:</strong> Ensure your account is secure by verifying your email address before logging in.</li>
                <li><strong>User-Friendly Design:</strong> Intuitive layout for quick access to your account.</li>
                <li><strong>Responsive:</strong> Works seamlessly on all devices, from desktops to mobile.</li>
            </ul>
            
            <h2>How It Works</h2>
            <p>Simply enter your email and password to access your account. If you haven't verified your email yet, a prompt will guide you through the verification process.</p>
            
            <p>To register your account continue to register page. <a href="register.php">Register Page</a>.</p>
            <p>Once your email is already verified proceed to login page. <a href="login.php">Login Page</a>.</p>
            <p>If you're looking for a source <a href="https://youtu.be/mKEQ7TJldN8?si=6_o8ZKZPLmNskuvL" target="_blank">Watch on YouTube</a>.</p>
        </div>
    </div>
</body>
</html>
