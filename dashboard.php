<?php
include('authentication.php');

$page_title = "Dashboard";
include('includes/header.php');
include('includes/navbar.php');


?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">


<div class="py-2">
        <div class="container">
            <div class="row">
                <div class="col-md-5 mx-auto">

                    <?php 
                        if(isset($_SESSION['status'])){
                            ?>
                            <div class="alert alert-success">
                                <h5> <?= $_SESSION['status']; ?> </h5>
                            </div>
                            <?php unset($_SESSION['status']); 
                        }
                    ?> 

                    <div class="card shadow-lg">
                        <div class="card-header bg-dark text-white">
                            <h4 class="mb-0">User Dashboard</h4>
                        </div>
                        <div class="card-body">
                            <h4 class="text-center">Access when you're Login</h4>
                            <hr>
                            <h5> <i class="bi bi-person-fill"></i> <strong>Username: </strong><?= $_SESSION['auth_user']['username']?></h5>
                            <hr>
                            <h5> <i class="bi bi-envelope-fill"></i> <strong>Email: </strong><?= $_SESSION['auth_user']['email']?></h5>
                            <hr>
                            <h5> <i class="bi bi-phone-fill"></i> <strong>Phone Number: </strong><?= $_SESSION['auth_user']['phone']?></h5>
                        </div>
                    </div>    
                    
                </div>
            </div>
        </div>
</div>

<div class="container">

    <!--form modal-->

    <div class="modal fade" id="usermodal" role="dialog" >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Adding or Updating User.</h5>
                    <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                    </button>
                </div>
                <form id="addform" method="POST" enctype="multipart/form-data">
                <div class="modal-body">

                    <!--for name-->
                    <div class="form-group">
                        <label>Name</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-dark"><i class="bi bi-person-circle text-light"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Enter for user name" autocomplete="off" required="required" id="username" name="username">
                        </div>
                    </div>

                     <!--for email-->
                    <div class="form-group">
                        <label>Email</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-dark"><i class="bi bi-envelope-paper text-light"></i></span>
                            </div>
                            <input type="email" class="form-control" placeholder="Enter for email" autocomplete="off" required="required" id="email" name="email">
                        </div>
                    </div>

                     <!--for Mobile Number-->
                    <div class="form-group">
                        <label>Mobile Number</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-dark"><i class="bi bi-phone text-light"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Enter for mobile number" autocomplete="off" required="required" id="mobile" name="mobile" maxLength="11" minLength="11">
                        </div>
                    </div>

                    <!--for photo-->
                    <div class="form-group">
                        <label>Image</label>
                        <div class="input-group">
                            <label class="custom-file-label" for="userphoto">Choose File</label>                            
                            <input type="file" class="custom-file-input" name="photo" id="userphoto">
                        </div>
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark">Submit</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!--input search and button section-->
  
    <div class="row">
        <div class="col-10">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-dark"><i class="bi bi-search text-light"></i></span>
                </div>
                <input type="text" class="form-control" placeholder="Search for employee">
            </div>
        </div>
        <div class="col-2">
            <button class="btn btn-dark" type="button" data-toggle="modal" data-target="#usermodal">
                Add New User
            </button>
        </div>
    </div>

</div>
<?php include('includes/footer.php');?>