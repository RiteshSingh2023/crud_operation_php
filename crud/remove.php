<?php
include('dbcon.php');
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "delete from `students` where `id` = '$id'";
    $result = mysqli_query($connection,$query);
    echo "<script>
    alert('Students is deleted');
    window.location.href='index.php';
      </script>";
}
?>