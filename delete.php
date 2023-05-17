<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_row']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['delete_row']);

    $query = "DELETE FROM tb_invoices WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Student Deleted Successfully";
        header("Location: receipt.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Deleted";
        header("Location: receipt.php");
        exit(0);
    }
}
exit;
 ?>
