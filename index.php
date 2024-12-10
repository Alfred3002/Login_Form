<?php
session_start();
$page_title = "Home Page";
include('includes/header.php');
include('includes/navbar.php');
?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

<style>
    /* Set the background image to cover the full screen */
    .background-image {
        background-image: url('back.jpg'); /* Ensure the path is correct */
        background-size: cover;  /* Ensures the image covers the entire background */
        background-position: center;  /* Centers the image */
        background-repeat: no-repeat; /* Prevents image from repeating */
        height: 100vh;  /* Full viewport height */
    }

    body, html {
        height: 100%;
        margin: 0;
    }

    .full-height {
        height: 100vh; /* Fill the entire viewport height */
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .bg-custom {
        background-color: #f4f7f6; /* Light background color */
    }

    .card {
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .btn-custom, .btn-custom-outline {
        padding: 6px 12px; /* Reduced padding */
        font-size: 14px; /* Smaller font size */
        border-radius: 5px;
        transition: background-color 0.3s ease;
        width: 130px; /* Slightly smaller width */
        margin: 4px; /* Reduced spacing between buttons */
    }

    .btn-custom {
        background-color: #4CAF50;
        color: white;
    }

    .btn-custom-outline {
        border: 2px solid #4CAF50;
        color: #4CAF50;
    }

    .btn-custom-outline:hover {
        background-color: #4CAF50;
        color: white;
    }

    .row {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .card-body {
        text-align: center;
    }

    /* Flexbox layout for both features and email verification */
    .features {
        display: flex;
        justify-content: space-between;
        gap: 20px; /* Reduced gap between the cards */
        margin-top: 20px;
        width: 100%;
    }

    /* Style for the cards */
    .feature-card, .email-card {
        background-color: #ffffff;
        padding: 15px; /* Reduced padding */
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        text-align: center;
        width: 180px; /* Slightly smaller width for cards */
    }

    /* Icon styling inside cards */
    .feature-card i, .email-card i {
        font-size: 35px; /* Slightly smaller icon size */
        color: #4CAF50;
        margin-bottom: 12px; /* Reduced margin */
    }

    /* Heading styling inside the cards */
    .feature-card h5, .email-card h5 {
        font-size: 16px; /* Smaller font size for heading */
        color: #333;
    }

    /* Additional Styling for Email Verification Section */
    .email-card {
        background-color: #fff;
        padding: 20px; /* Reduced padding for email card */
        border-radius: 12px;
        box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
    }

    .email-card i {
        font-size: 40px; /* Reduced icon size for email card */
        color: #007BFF;
    }

    .email-card h5 {
        font-size: 18px; /* Reduced font size for email card heading */
        font-weight: bold;
    }

    .email-card p {
        font-size: 14px; /* Reduced font size for email card description */
        color: #555;
    }

    /* Glassmorphism Effect (Very Subtle) */
.glass {
    background: rgba(255, 255, 255, 0.4);  /* More opaque background for better text contrast */
    border-radius: 15px;  /* Rounded corners */
    padding: 20px;
    backdrop-filter: blur(3px);  /* Less intense blur for a softer glassmorphism */
    -webkit-backdrop-filter: blur(3px); /* For Safari */
    border: 1px solid rgba(255, 255, 255, 0.4); /* Lighter border */
}

/* Apply subtle glassmorphism to all divs you want */
.card, .feature-card, .email-card {
    background: rgba(255, 255, 255, 0.4);  /* Increased opacity to make text more readable */
    border-radius: 15px;  /* Rounded corners */
    padding: 20px;
    backdrop-filter: blur(3px);  /* Reduced blur effect */
    -webkit-backdrop-filter: blur(3px); /* For Safari */
    border: 1px solid rgba(255, 255, 255, 0.4); /* Lighter border */
    color: #333; /* Darker text for contrast */
}

/* Modify button to match the subtle glassmorphism theme */
.btn-custom, .btn-custom-outline {
    background: rgba(255, 255, 255, 0.4); /* Slightly more opaque for better contrast */
    border-radius: 10px;  /* Rounded corners */
    backdrop-filter: blur(2px);  /* Less intense blur */
    border: 1px solid rgba(255, 255, 255, 0.4); /* Lighter border */
    color: white;
    transition: all 0.3s ease;
}

/* Adding subtle glassmorphism to row and column containers */
.row, .container, .features {
    backdrop-filter: blur(3px);  /* Subtle blur effect */
}

/* Add text shadow for readability */
.card h3, .card h4, .card p, .feature-card h5, .email-card h5 {
    text-shadow: 0px 0px 5px rgba(0, 0, 0, 0.4); /* Lighter shadow to improve text contrast */
}

/* Ensure good contrast on the buttons */
.btn-custom {
    background-color: #4CAF50; /* Solid color for better visibility */
    border: none;
}

.btn-custom-outline {
    border: 2px solid #4CAF50;
    color: #4CAF50;
}

</style>

<!-- Apply background image class here -->
<div class="py-5 bg-custom full-height background-image">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <div class="card p-4">
                    <h3 class="display-4 text-success">
                        <i class="bi bi-person-fill"></i> Employee Management System
                    </h3>
                    <h4 class="text-secondary text-success">Efficiently Manage Employee Data</h4>
                    <p class="lead text-light">Easily add, update, and view employee details in one place.</p>
                    <hr>
                    <p class="text-light">Start managing your employee records by logging in or registering an account.</p>
                </div>
            </div>
        </div>

        <!-- Features Section with Email Verification -->
        <div class="features">
            <div class="feature-card">
                <i class="bi bi-person-plus-fill"></i>
                <h5>Add Employee</h5>
                <p>Quickly add new employees to the system.</p>
            </div>
            <div class="feature-card">
                <i class="bi bi-pencil-square"></i>
                <h5>Edit Employee</h5>
                <p>Update employee information whenever necessary.</p>
            </div>
            <div class="feature-card">
                <i class="bi bi-eye-fill"></i>
                <h5>View Employee</h5>
                <p>Access employee details with just a few clicks.</p>
            </div>
            <div class="feature-card">
                <i class="bi bi-trash-fill"></i>
                <h5>Delete Employee</h5>
                <p>Remove an employee's data from the system.</p>
            </div>

            <!-- Email Verification Card Inside Features Section -->
            <div class="email-card">
                <i class="bi bi-envelope-check-fill"></i>
                <h5>Email Verification</h5>
                <p>Verify your email to ensure account security and updates.</p>
                <a class="btn btn-custom" href="verify_email.php">Verify Now</a>
            </div>
        </div>
    </div>
</div>
<?php include('includes/footer.php');?>