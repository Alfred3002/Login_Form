<!-- Navbar Section -->
<div class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Navbar -->
                <nav class="navbar navbar-expand-lg navbar-dark">
                    <div class="container-fluid">
                        <!-- Brand Logo and Name -->
                        <a class="navbar-brand" href="#"><b><i>AJK CORPORATION</i></b></a>

                        <!-- Navbar Toggler for Mobile -->
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <!-- Navbar Links -->
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                                <!-- Home, Register, Login for non-authenticated users -->
                                <?php if(!isset($_SESSION['authenticated'])) : ?>
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="index.php"><b>Home</b></a>
                                    </li> 

                                    <li class="nav-item">
                                        <a class="nav-link active" href="register.php"><b>Register</b></a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link active" href="login.php"><b>Login</b></a>
                                    </li>
                                <?php endif ?>

                                <!-- Employee Data, Logout for authenticated users -->
                                <?php if(isset($_SESSION['authenticated'])) : ?>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="worker.php"><b>Employee's Data</b></a>
                                    </li>  

                                    <li class="nav-item">
                                        <a class="nav-link active" href="logout.php"><b>Logout</b></a>
                                    </li>
                                <?php endif ?>

                            </ul>
                        </div>
                    </div>
                </nav> 
            </div>
        </div>
    </div>
</div>