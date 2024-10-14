<?php
session_start();
$page_title = "Registration Form";
include('includes/header.php');
include('includes/navbar.php');
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="alert">

                    <?php 
                        if(isset($_SESSION['status'])){
                           echo "<h4>".$_SESSION['status']."</h4>"; 
                           unset($_SESSION['status']);
                        }
                    ?>
                    
                </div>
                <div class="card shadow">
                    <div class="card-header">
                        <h5>Registration Form</h5>
                    </div>

                    <div class="card-body">
                        <form action="code.php" method="POST">

                            <div class="form-group mb-3">
                                <label for="">Name</label>
                                <div class="input-group">
                                    <span class="input-group-text"> <i class="bi bi-person"></i></span>
                                    <input type="text" name="name" placeholder="Enter your full name" class="form-control">
                                </div>
                                
                            </div>

                            <div class="form-group mb-3">
                                <label for="">Phone Number</label>
                                <div class="input-group">
                                    <span class="input-group-text"> <i  class="bi bi-telephone"></i></span>
                                    <input type="text" name="phone" placeholder="Enter phone number" class="form-control">
                                </div>
                            </div>

                            <div class="form-group mb-3">
                                <label for="">Email Address</label>
                                <div class="input-group">
                                    <span class="input-group-text"> <i class="bi bi-envelope"></i></span>
                                    <input type="text" name="email" placeholder="Enter an active email address" class="form-control">
                                </div>
                            </div>
                            
                            <div class="form-group mb-3">
                                <label for="">Password</label>
                                <div class="input-group">
                                    <span class="input-group-text"> <i class="bi bi-lock"></i></span>
                                    <input type="password" id="password" name="password" placeholder="Enter password" class="form-control">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <button type="submit" name="register_btn" class="btn btn-secondary">Register Now</button>
                            </div>
                        </form>
                    </div>
                    
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php');?>