<?php
session_start();
include ('includes/header.php');
include ('includes/navbar.php');
include ('workerCon/workerCon.php');

    $client = $_GET['client'];
    if(!isset($client)){
        header("location: worker.php");
    }
    $select = mysqli_query($conn, "SELECT * FROM `worker` WHERE crud_id = '$client'");
    $fecth = mysqli_fetch_assoc($select);

    if(isset($_POST['submit'])){
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $number = trim($_POST['number']);
        $address = trim($_POST['address']);
        $birth = trim($_POST['date']);
        $gender = trim($_POST['gender']);




        $update = mysqli_query($conn, "UPDATE `worker` SET `name`='$name',`email`='$email',`mobile`='$number',`address`='$address',`birth`='$birth',`gender`='$gender' WHERE `crud_id` = '$client'");

        if($update){
            header("location: edit.php?client=$client&&success=Client Edited Successfully");
        }
    }

?>
    <div class="container my-5">
        <h2>Edit Employee</h2>
        <br>
        <br>

        <form action="" method="post">
        <?php
                if(isset($_GET['success'])){
                    echo '<div class="w-25 alert alert-success" role="alert">'.$_GET['success'].'</div>';
                }
            
            ?>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Name</label>
                <div class="col-sm-6">
                    <input type="text" value="<?php echo $fecth['name'] ?>" name="name" class="form-control" placeholder="Client Name" required>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-6">
                    <input type="email" value="<?php echo $fecth['email'] ?>" name="email" class="form-control" placeholder="Client Email" required>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Phone No.</label>
                <div class="col-sm-6">
                    <input type="number" value="<?php echo $fecth['mobile'] ?>" name="number" class="form-control" placeholder="Client Phone Number" required>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Address</label>
                <div class="col-sm-6">
                    <input type="text" value="<?php echo $fecth['address'] ?>" name="address" class="form-control" placeholder="Client Address" required>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Date Of Birth</label>
                <div class="col-sm-6">
                    <input type="date" value="<?php echo $fecth['birth'] ?>" name="date" class="form-control" placeholder="Client Date Of Birth" required>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label" >Gender</label>
                <div class="col-sm-6">
                   <select name="gender" class="form-control">
                    <?php
                        if($fecth['gender'] === 'Male'){
                            echo '<option>Male</option>
                            <option>Female</option>';
                        }else{
                            echo '<option>Female</option>
                            <option>Male</option>';
                        }
                    ?>
                        
                   </select>
                </div>
            </div>
            <div class="row mb-3">
               <button type="submit" name="submit" class="col-sm-3 btn btn-primary">Edit Employee</button>
                <div class="col-sm-6">
                   <a href="worker.php" class="btn btn-outline-primary">Go Back</a>
                </div>
            </div>
        </form>
    </div>
<?php
include ('includes/footer.php');
?>
