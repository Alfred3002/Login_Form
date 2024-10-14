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
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #e0ffff;
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
    
    <div class="container my-5">
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
            
            <p>To register your account, continue to the register page. <a href="register.php">Register Page</a>.</p>
            <p>Once your email is verified, proceed to the login page. <a href="login.php">Login Page</a>.</p>
            <p>If you're looking for a source, <a href="https://youtu.be/mKEQ7TJldN8?si=6_o8ZKZPLmNskuvL" target="_blank">Watch on YouTube</a>.</p>
        </div>
    </div>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>

</body>
</html>

<?php
include('includes/footer.php');
?>
