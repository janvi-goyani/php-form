<?php
include('conn.php');

        $que = "SELECT * FROM `$students` ORDER BY name ASC";
        $res = mysqli_query($conn,$que);
        while ($row = mysqli_fetch_assoc($res)) {
              $data[] = $row;

  }
        header('Content-Type: application/json');
        echo json_encode($data, JSON_PRETTY_PRINT);
?>