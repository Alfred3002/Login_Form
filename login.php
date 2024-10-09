<?php
session_start();
$page_title = "Login Form";
include('includes/header.php');
include('includes/navbar.php');
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">

                    <?php 
                        if(isset($_SESSION['status'])){
                            ?>
                            <div class="alert alert-success">
                                <h5> <?= $_SESSION['status']; ?> </h5>
                            </div>
                            <?php unset($_SESSION['status']); 
                        }
                    ?> 
                    
                <div class="card shadow">
                    <div class="card-header">
                        <h5>Login Form</h5>
                    </div>

                    <div class="card-body">
                        <form action="">
                            
                            <div class="form-group mb-3">
                                <label for="">Email Address</label>
                                <div class="input-group">
                                    <span class="input-group-text">  <i class="bi bi-envelope"></i> </span>
                                    <input type="text" name="email" placeholder="Enter your email address" class="form-control">
                                </div>
                            </div>

                            <div class="form-group mb-3">
                                <label for="">Password</label>
                                <div class="input-group">
                                    <span class="input-group-text">  <i class="bi bi-lock"></i> </span>
                                    <input type="password" id="password" name="password" placeholder="Enter a password" require class="form-control">
                                </div>
                            </div>
            
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Login Now</button>
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