<?php
session_start();
$con = mysqli_connect("localhost","root","","invoice");

if(isset($_POST['submit']))
{
    $firstname = $_POST["FirstName"];
    $lastname =  $_POST["LastName"];
    $email =  $_POST["Email"];
    $check_in_date =  $_POST["Check_in"];
    $check_out_date = $_POST["Check_out"];
    $room =  $_POST["Room"];
    $gender =  $_POST["Gender"];
    $age = $_POST["Age"];

    // Check if all form fields are filled
  if (!empty($firstname) && !empty($lastname) && !empty($email) && !empty($check_in_date) && !empty($check_out_date) && !empty($room) && !empty($gender) && !empty($age)) {
    // All fields are filled, perform database insertion

    $query = "INSERT INTO tb_invoices (FirstName, LastName, Email, Check_in, Check_out, Room, Gender, Age) " .
            "VALUES ('$firstname', '$lastname', '$email', '$check_in_date', '$check_out_date', '$room',  '$gender', '$age')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['status'] = '<script>alert("Details Submitted Successfully!");</script>';
        header("Location: Book.php");
    }
    else
    {
        $_SESSION['status'] = '<script>alert("All Fields are Required!");</script>';
        header("Location: Book.php");
    }
  }
}
?>
