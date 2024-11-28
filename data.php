<?php
session_start();
$page_title = "Employee's Data";
include('includes/header.php');
include('includes/navbar.php');

?>

<div class="container mt-2">

    <!--form modal-->
   <?php
   include('CRUD/form.php');
   ?>
   <!--userProfile-->
   <?php
   include('CRUD/profile.php');
   ?>

    <!--input search and button section-->
  
    <div class="row mb-3">
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

    <!--table-->
    <?php
    include('CRUD/table.php');
    ?>

    <!--pagination-->
    <nav aria-label="Page navigation example" id="pagination">
        <ul class="pagination justify-content-center">
            <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
    </nav>

</div>

<?php
include('includes/footer.php');
?>