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
<style>
    /* Background image */
    .background-image {
        background-image: url('images/worker.jpg');
        background-size: cover;
        background-position: center;
        position: absolute;
        width: 100%;
        height: 100%;
        z-index: -1; /* Keeps the background behind all content */
    }

    /* Glassmorphism effect on the card container */
    .card {
        background: rgba(255, 255, 255, 0.3); /* Semi-transparent white background */
        backdrop-filter: blur(10px); /* Frosted glass effect */
        border-radius: 15px; /* Rounded corners */
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2); /* Soft shadow for a floating effect */
        padding: 30px; /* Space inside the card */
    }

    /* Optional: Apply some padding to the body to create a nice layout */
    body {
        padding-top: 0px; /* Adjust top padding if needed */
        padding-bottom: 50px; /* Adjust bottom padding if needed */
    }

    /* Apply a more subtle shadow on the input fields */
    .form-control {
        background-color: rgba(255, 255, 255, 0.8); /* Slightly white background for inputs */
        border-radius: 10px;
        border: 1px solid #ddd; /* Light border */
        box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1); /* Inner shadow */
    }

    /* Make buttons look consistent with frosted glass */
    .btn-primary, .btn-outline-secondary {
        background-color: rgba(0, 123, 255, 0.8); /* Semi-transparent button background */
        border: none;
        color: white;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Soft shadow for buttons */
    }

    .btn-primary:hover, .btn-outline-secondary:hover {
        background-color: rgba(0, 123, 255, 1); /* Solid color on hover */
    }

    /* Make the alert box look consistent with the glassmorphism theme */
    .alert-success {
        background-color: rgba(76, 175, 80, 0.7); /* Transparent green */
        border-radius: 10px;
        color: white;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
</style>

<div class="background-image"><!-- Background image div -->
    <div class="container my-4">
        <div class="card p-3 shadow-lg">
            <h2 class="text-center mb-4 text-success"><b>Edit Employee</b></h2>

            <!-- Success Message -->
            <?php
                if(isset($_GET['success'])){
                    echo '<div class="alert alert-success text-center" role="alert">'.$_GET['success'].'</div>';
                }
            ?>
            <!-- Form Section -->
            <form action="" method="post">
                
                <!-- Name Field -->
                <div class="mb-3">
                    <label for="name" class="form-label text-success"><b>Employee Name</b></label>
                    <input type="text" name="name" id="name" value="<?php echo $fecth['name']; ?>" class="form-control shadow-sm" placeholder="Enter Employee Name" required>
                </div>

                <!-- Email Field -->
                <div class="mb-3">
                    <label for="email" class="form-label text-success"><b>Employee Email</b></label>
                    <input type="email" name="email" id="email" value="<?php echo $fecth['email']; ?>" class="form-control shadow-sm" placeholder="Enter Employee Email" required>
                </div>

                <!-- Phone Number Field -->
                <div class="mb-3">
                    <label for="phone" class="form-label text-success"><b>Phone No.</b></label>
                    <input type="number" name="number" id="phone" value="<?php echo $fecth['mobile']; ?>" class="form-control shadow-sm" placeholder="Enter Employee Phone Number" required>
                </div>

                <!-- Address Field -->
                <div class="mb-3">
                    <label for="address" class="form-label text-success"><b>Employee Address</b></label>
                    <input type="text" name="address" id="address" value="<?php echo $fecth['address']; ?>" class="form-control shadow-sm" placeholder="Enter Employee Address" required>
                </div>

                <!-- Date of Birth Field -->
                <div class="mb-3">
                    <label for="dob" class="form-label text-success"><b>Date of Birth</b></label>
                    <input type="date" name="date" id="dob" value="<?php echo $fecth['birth']; ?>" class="form-control shadow-sm" required>
                </div>

                <!-- Gender Field -->
                <div class="mb-3">
                    <label for="gender" class="form-label text-success"><b>Gender</b></label>
                    <select name="gender" id="gender" class="form-control shadow-sm">
                        <?php
                            if($fecth['gender'] === 'Male'){
                                echo '<option>Male</option>
                                      <option>Female</option>';
                            } else {
                                echo '<option>Female</option>
                                      <option>Male</option>';
                            }
                        ?>
                    </select>
                </div>

                <div class="mb-4 d-flex gap-2 justify-content-center">
                    <button type="submit" name="submit" class="btn btn-primary w-48 shadow-sm">Edit Employee</button>
                    <a href="worker.php" class="btn btn-outline-secondary w-48 shadow-sm">Go Back</a>
                </div>

            </form>
        </div>
    </div>
</div>

<?php
include ('includes/footer.php');
?>
