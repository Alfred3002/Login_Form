<?php
$page_title = "Home Page";
include('includes/header.php');
?>

<head> 
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Login Form Features</title>
    <style>
        .card {
            transition: transform 0.3s;
        }
        .card:hover {
            transform: scale(1.05);
        }
        .feature-icon {
            font-size: 2em;
            margin-right: 10px;
            color: #007bff;
        }
    </style>
</head>
<body>
    <?php include('includes/navbar.php'); ?>

<div class="container my-5">
    <div class="row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="card border-primary shadow-sm">
                <div class="card-body">
                    <h1 class="card-title text-primary"><i>About Our Login Form</i></h1>
                    <p class="card-text">Welcome to our login page! Our form allows users to securely access their accounts with ease.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="card border-success shadow-sm">
                <div class="card-body">
                    <h2 class="card-title text-success">Key Features</h2>
                    <ul class="list-unstyled">
                        <li class="d-flex align-items-center">
                            <i class="fas fa-envelope feature-icon"></i>
                            <span><strong>Email Verification:</strong> Ensure your account is secure by verifying your email address before logging in.</span>
                        </li>
                        <li class="d-flex align-items-center">
                            <i class="fas fa-user-friends feature-icon"></i>
                            <span><strong>User-Friendly Design:</strong> Intuitive layout for quick access to your account.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card border-info shadow-sm">
                <div class="card-body">
                    <h2 class="card-title text-info">How It Works</h2>
                    <p class="card-text">Simply enter your email and password to access your account. If you haven't verified your email yet, a prompt will guide you through the verification process.</p>
                    <p class="card-text">To register your account, continue to the register page. <a href="register.php">Register Page</a>.</p>
                    <p class="card-text">Once your email is verified, proceed to the login page. <a href="login.php">Login Page</a>.</p>
                    <p class="card-text">If you're looking for a source, <a href="https://youtu.be/mKEQ7TJldN8?si=6_o8ZKZPLmNskuvL" target="_blank">Watch on YouTube</a>.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>



<?php
include('includes/footer.php');
?>