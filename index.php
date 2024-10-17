<?php
$page_title = "Home Page";
include('includes/header.php');
include('includes/navbar.php');

?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> <!-- Wako kasabot sa gibati run, mura nako dere ug kaundangun -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

    <style>
            body, html {
                height: 100%;
                margin: 0;
            }
            .full-height {
                height: 100vh; /* Fill the entire viewport height */
            }
    </style>

    < <div class="py-5 bg-light full-height"> <!--serves as a container with padding and a light background, filling the entire viewport height. -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <h3 class="display-4 text-primary">
                        <i class="bi bi-envelope-fill"></i> Login and Registration System in PHP
                    </h3>
                    <h4 class="text-secondary">with Email Verification</h4>
                    <p class="lead">Securely manage user accounts with ease.</p>
                    <hr class="my-4">
                    <p>Get started by logging in or registering your account.</p>
                    <a class="btn btn-primary btn-lg" href="login.php">Login</a>
                    <a class="btn btn-outline-secondary btn-lg" href="register.php">Register</a>
                </div>
            </div>
        </div>
    </div>

<?php include('includes/footer.php');?>