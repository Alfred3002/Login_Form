<?php
session_start();
$page_title = "Registration Form";
include('includes/header.php');
include('includes/navbar.php');
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

<style>
    .background-image {
        background-image: url('images/loginback.jpg');
        background-size: cover;
        background-position: center;
        height: 100vh;
    }

    /* Glassmorphism effect */
    .glass {
        background: rgba(255, 255, 255, 0.4); /* Slightly stronger transparent background */
        backdrop-filter: blur(8px); /* Slightly stronger blur */
        -webkit-backdrop-filter: blur(8px); /* For Safari */
        border-radius: 10px;
        border: 1px solid rgba(255, 255, 255, 0.1);
    }

    /* Card background */
    .card {
        background: rgba(255, 255, 255, 0.4); /* Transparent white */
        backdrop-filter: blur(8px); /* Frosted glass effect */
        border-radius: 10px;
        border: 1px solid rgba(255, 255, 255, 0.2);
    }

    /* Input fields and buttons to match the frosted glass theme */
    .form-control {
        background: rgba(255, 255, 255, 0.3); /* Slightly more transparent */
        backdrop-filter: blur(5px); /* Frosted glass effect for input fields */
        border-radius: 8px;
        color: #333; /* Darker text for readability */
    }

    .btn-primary {
        background-color: rgba(0, 123, 255, 0.8); /* Transparent blue button */
        border: none;
    }

    .btn-primary:hover {
        background-color: rgba(0, 123, 255, 1); /* Full opacity on hover */
    }

    .alert {
        background-color: rgba(255, 255, 255, 0.6); /* Slightly stronger alert background */
        backdrop-filter: blur(5px); /* Frosted glass effect */
        border-radius: 8px;
    }
</style>

<div class="py-5 background-image">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="alert glass">

                    <?php 
                        if(isset($_SESSION['status'])){
                           echo "<h4>".$_SESSION['status']."</h4>"; 
                           unset($_SESSION['status']);
                        }
                    ?>
                    
                </div>
                <div class="card shadow glass">
                    <div class="card-header text-center bg-primary text-light">
                        <h5><i class="bi bi-envelope-check"></i> Registration Form</h5>
                    </div>

                    <div class="card-body">
                        <form action="code.php" method="POST">

                            <div class="form-group mb-3">
                                <label for="">Name</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-success text-light"> <i class="bi bi-person"></i></span>
                                    <input type="text" name="name" placeholder="Enter your full name" class="form-control">
                                </div>
                            </div>

                            <div class="form-group mb-3">
                                <label for="">Phone Number</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-success text-light"> <i  class="bi bi-telephone"></i></span>
                                    <input type="text" name="phone" placeholder="Enter phone number" class="form-control">
                                </div>
                            </div>

                            <div class="form-group mb-3">
                                <label for="">Email Address</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-success text-light"> <i class="bi bi-envelope"></i></span>
                                    <input type="text" name="email" placeholder="Enter an active email address" class="form-control">
                                </div>
                            </div>
                            
                            <div class="form-group mb-3">
                                <label for="">Password</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-success text-light"> <i class="bi bi-lock"></i></span>
                                    <input type="password" id="password" name="password" placeholder="Enter password" class="form-control">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <button type="submit" name="register_btn" class="btn btn-primary">Register Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php');?>
