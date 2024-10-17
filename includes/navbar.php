<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>

<div class="bg-dark">
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
                                            <a class="nav-link active" aria-current="page" href="index.php">
                                               Home <i class="bi bi-house-check"></i> 
                                            </a>
                                        </li>


                                        <li class="nav-item">
                                            <a class="nav-link" href="dashboard.php">
                                                Dashboard <i class="bi bi-clipboard-data"></i>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" href="about.php">
                                               About <i class="bi bi-info-circle"></i>
                                            </a>
                                        </li>

                                        <?php if(!isset($_SESSION['authenticated'])) : ?> 
                                        <li class="nav-item">
                                            <a class="nav-link" href="register.php">   
                                               Register <i class="bi bi-person-vcard-fill"></i>
                                            </a>
                                        </li>   
                                        <li class="nav-item">
                                            <a class="nav-link" href="login.php">
                                               Login <i class="bi bi-person-plus"></i>
                                            </a>
                                        </li>
                                        <?php endif ?>

                                        <?php if(isset($_SESSION['authenticated'])) : ?>
                                        <li class="nav-item">
                                            <a class="nav-link" href="logout.php">
                                               Logout <i class="bi bi-person-x-fill"></i>
                                            </a>
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