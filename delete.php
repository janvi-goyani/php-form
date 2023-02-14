<?php 
    include('conn.php');
if(isset($_GET['id'])){
    $id = $_GET['id'];

    $que ="DELETE FROM `$students` WHERE id ='$id'";
    $res =mysqli_query($conn,$que);

    header('location:view.php');
}    