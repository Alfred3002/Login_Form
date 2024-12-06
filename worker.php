<?php
session_start();
include ('includes/header.php');
include ('includes/navbar.php');
?>


<style>
    .table-container {
        max-height: 400px; /* Adjust the max height */
        overflow-y: auto; /* Allows scrolling for long data */
    }

    table {
        table-layout: fixed;
        width: 100%;
        border-collapse: collapse; /* Ensures there are no gaps between borders */
    }

    th, td {
        border: 1px solid #ddd; /* Adds a border around each cell */
        padding: 8px;
        text-align: left;
        max-width: 150px; /* Adjust the width as needed */
        word-wrap: break-word;
        overflow: hidden;
        text-overflow: ellipsis; /* Truncates overflowed text with "..." */
    }

    th {
        position: sticky;
        top: 0;
        background-color: #f1f1f1; /* Keeps header background white */
        z-index: 1; /* Ensures the header stays above the table rows */
    }

    button {
        padding: 5px 10px;
        background-color: #007bff;
        color: white;
        border: none;
        cursor: pointer;
    }

    button:hover {
        background-color: #0056b3;
    }
</style>

<div class="container my-5">
    <h2>List of Employee</h2>
    <div class="mb-3">
        <div class="row">
            <a href="workerCreate.php" class="col-sm-3 mb-3 btn btn-primary" role="button">Add New Employee</a>
            <div class="col-sm-6">
                <input type="text" name="search" placeholder="Search name for Employee" id="search_bar" class="form-control">
            </div>
        </div>
    </div>
    <br>
    <br>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Date of Birth</th>
                <th>Gender</th>
                <th>Created At</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody id="tbody">
          
            <?php
                include ('workerCon/worker_record.php');
            ?>

        </tbody>
    </table>

</div>

<script src="js/search.js"></script>

<?php
include ('includes/footer.php');
?>
