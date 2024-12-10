<?php
session_start();

if(isset($_SESSION['authenticated'])){
    $_SESSION['status'] = "You are already logged in.";
    header('Location: data.php');
    exit(0);
}

$page_title = "Login Form";
include('includes/header.php');
include('includes/navbar.php');
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

<style>
    /* Background image settings */
    .background-image {
        background-image: url('images/loginback.jpg'); /* Your image path */
        background-size: cover;
        background-position: center;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -1;
    }

    /* Glassmorphism effect for the login form card */
    .glass-card {
        background: rgba(255, 255, 255, 0.1); /* Transparent background */
        backdrop-filter: blur(10px); /* Glassmorphism blur effect */
        border-radius: 15px; /* Rounded corners */
        padding: 30px; /* Padding inside the form */
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2); /* Shadow for 3D effect */
    }

    /* Style for the card header */
    .card-header {
        background-color: rgba(0, 123, 255, 0.7); /* Transparent primary color */
        color: white;
        font-size: 20px;
        font-weight: bold;
    }

    /* Styling for the button */
    .btn-primary {
        background-color: #28a745;
        border: none;
        width: 100%;
        padding: 10px;
        font-size: 16px;
    }

    .btn-primary:hover {
        background-color: #218838;
    }

    /* Other custom styles */
    .input-group-text {
        background-color: #28a745;
        color: white;
    }
    .navbar {
        position: relative;
        z-index: 1;
    }

    /* Center the login form vertically */
    .login-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
</style>

<!-- Full-page background image -->
<div class="background-image"></div>

<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <?php 
                    if(isset($_SESSION['status'])){
                        ?>
                        <div class="alert alert-danger">
                            <h5> <?= $_SESSION['status']; ?> </h5>
                        </div>
                        <?php unset($_SESSION['status']); 
                    }
                ?> 

                <div class="card shadow glass-card"> <!-- Added the glass-card class here -->
                    <div class="card-header text-center bg-primary text-light">
                        <h5><i class="bi bi-box-arrow-in-right"></i> Login Form</h5>
                    </div>

                    <div class="card-body">
                        <form action="logincode.php" method="POST">
                            
                            <div class="form-group mb-3">
                                <label for="">Email Address</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-success text-light">  <i class="bi bi-envelope"></i> </span>
                                    <input type="text" name="email" placeholder="Enter your email address" class="form-control">
                                </div>
                            </div>

                            <div class="form-group mb-3">
                                <label for="">Password</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-success text-light">  <i class="bi bi-lock"></i> </span>
                                    <input type="password" id="password" name="password" placeholder="Enter a password" require class="form-control">
                                </div>
                            </div>
                
                            <div class="form-group">
                                <button type="submit" name="login_now_btn" class="btn btn-primary">Login Now</button>
                            </div>
                        </form>

                        <hr>
                        <h5>
                            Did not recieve your Email Verification?
                            <a href="resend-email.php">Resend</a>
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php');?>
