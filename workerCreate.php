<?php
    session_start();
    include ('includes/header.php');
    include ('includes/navbar.php');
    include ('workerCon/workerCon.php');

    if(isset($_POST['submit'])){
        $ran_id = rand(time(), 100000000);
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $number = trim($_POST['number']);
        $address = trim($_POST['address']);
        $birth = trim($_POST['date']);
        $gender = trim($_POST['gender']);


        $date = date('d - F Y');


        $insert = mysqli_query($conn, "INSERT INTO worker(crud_id, name, email, mobile, address, birth, gender, time_created) 
        VALUES ('$ran_id','$name','$email','$number','$address','$birth','$gender','$date')");

        if($insert){
            header("location: workerCreate.php?success=Client Created Successfull");
        }
    }

?>
<div class="container my-5" style="background: linear-gradient(135deg, #f5f5dc, #2575fc); padding: 20px; border-radius: 8px; max-width: 600px; margin: 0 auto;">
    <h2 class="text-center mb-4 text-white">New Employee</h2>

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
            <label for="name" class="form-label text-white">Employee Name</label>
            <input type="text" name="name" id="name" class="form-control shadow-sm" placeholder="Enter Employee Name" required>
        </div>

        <!-- Email Field -->
        <div class="mb-3">
            <label for="email" class="form-label text-white">Employee Email</label>
            <input type="email" name="email" id="email" class="form-control shadow-sm" placeholder="Enter Employee Email" required>
        </div>

        <!-- Phone Number Field -->
        <div class="mb-3">
            <label for="phone" class="form-label text-white">Phone No.</label>
            <input type="number" name="number" id="phone" class="form-control shadow-sm" placeholder="Enter Employee Phone Number" required>
        </div>

        <!-- Address Field -->
        <div class="mb-3">
            <label for="address" class="form-label text-white">Employee Address</label>
            <input type="text" name="address" id="address" class="form-control shadow-sm" placeholder="Enter Employee Address" required>
        </div>

        <!-- Date of Birth Field -->
        <div class="mb-3">
            <label for="dob" class="form-label text-white">Date of Birth</label>
            <input type="date" name="date" id="dob" class="form-control shadow-sm" required>
        </div>

        <!-- Gender Field -->
        <div class="mb-3">
            <label for="gender" class="form-label text-white">Gender</label>
            <select name="gender" id="gender" class="form-control shadow-sm">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
        </div>

        <!-- Submit Button -->
        <div class="mb-4">
            <button type="submit" name="submit" class="btn btn-primary w-100 shadow-sm">Submit</button>
        </div>

        <!-- Go Back Button -->
        <div>
            <a href="worker.php" class="btn btn-outline-secondary w-100 shadow-sm">Go Back</a>
        </div>
    </form>
</div>

<?php 
include ('includes/footer.php');
?> 