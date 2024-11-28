<head>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

</head>
<div class="bg-success">
    <div class="container">
        <div class="row">
            <div class="col-md12">                                           
                    <nav class="navbar navbar-expand-lg navbar-dark">
                        <div class="container-fluid">

                            <a class="navbar-brand" href="#"><b><i>Alfred_Orapa</i></b></a>

                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                
                                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="index.php"> Home</a>
                                </li>

                                <?php if(!isset($_SESSION['authenticated'])) : ?>
                                <li class="nav-item">
                                    <a class="nav-link active" href="register.php">Register</a>
                                </li>   
                                <li class="nav-item active">
                                    <a class="nav-link active" href="login.php">Login</a>
                                </li>
                                <?php endif ?>

                                <?php if(isset($_SESSION['authenticated'])) : ?>
                                <li class="nav-item ">
                                    <a class="nav-link active" href="data.php">Employee's Data</a>
                                </li>  
                                <li class="nav-item ">
                                    <a class="nav-link active" href="logout.php">Logout</a>
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