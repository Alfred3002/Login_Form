<?php
    include ('includes/header.php');
    //include ('includes/navbar.php');
    include "workerCon.php";
    $sql = mysqli_query($conn, "SELECT * FROM `worker`");
    $output = "";
    if(mysqli_num_rows($sql) > 0){
        while($fecth = mysqli_fetch_assoc($sql)){
            $output .= '<tr>
            <td>'.$fecth['id'].'</td>
            <td>'.$fecth['name'].'</td>
            <td>'.$fecth['email'].'</td>
            <td>'.$fecth['mobile'].'</td>
            <td>'.$fecth['address'].'</td>
            <td>'.$fecth['birth'].'</td>
            <td>'.$fecth['gender'].'</td>
            <td>'.$fecth['time_created'].'</td>
            <td>
                <a href="edit.php?client='.$fecth['crud_id'].'" class="btn btn-primary btn-sm">Edit</a>
                <a href="workerCon/delete.php?client='.$fecth['crud_id'].'" class="btn btn-danger btn-sm">Delete</a>
            </td>
        </tr>';
        }
    }else{
        $output .= 'No Employee Are Available';
    }

    echo $output;

?>

<?php 
include ('includes/footer.php');
?>