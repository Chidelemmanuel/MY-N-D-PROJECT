<?php
require 'dbcon.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    body{
  font-family: Arial, sans-serif;
  background-color: whitesmoke;
  margin: 0;
  padding: 0;
    }

    .text{
        text-align: center;
        text-size-adjust: 2px;
        padding: 10px;
        font-family: 'Times New Roman', Times, serif;
        font-size: large;
    }

    .logo {
  position: inherit;
  top: 0;
  left: 0;
  padding: 10px;
}

.btn {
  border: none;
  background-color: inherit;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
  display: inline-block;
  text-decoration: none;
  margin: 30px;
}

/* On mouse-over */
.btn:hover {background-color: grey;}
.warning {color: orange;}
.danger {color: red;}
.info {background-color: #2196F3;}
.default:hover {background: #ddd;}

.line{
    padding: 2px;
    margin: 5px;

}


</style>
    
    <title>viewport</title>
</head>
<body>
<div class="logo default" >
    <!-- Here, u add your logo. Could be an image or String -->
    <p style="color: orange;" >LOGO HERE</p>
</div>

    <div class="text" ><b>DETAILS OF YOUR RESERVATION</b></div>

                    <div class="container">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $student_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM tb_invoices WHERE id='$student_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $row = mysqli_fetch_array($query_run);
                                ?>
                                
                                    <div class="line">
                                        <p class="liner">
                                            First Name: <?=$row['FirstName'];?>
                                        </p>
                                    </div>
                                    <div class="line">
                                        <p class="liner">
                                            Last Name: <?=$row['LastName'];?>
                                        </p>
                                    </div>
                                    <div class="line">
                                        <p class="liner">
                                           Email: <?=$row['Email'];?>
                                        </p>
                                    </div>
                                    <div class="line">
                                        <p class="liner">
                                        Check_in_Date: <?=$row['Check_in'];?>
                                        </p>
                                    </div>
                                    <div class="line">
                                        <p class="liner">
                                        Check_out_Date: <?=$row['Check_out'];?>
                                        </p>
                                    </div>
                                    <div class="line">
                                        <p class="liner">
                                        Room Reservation: <?=$row['Room'];?>
                                        </p>
                                    </div>
                                    <div class="line">
                                        <p class="liner">
                                        Gender: <?=$row['Gender'];?>
                                        </p>
                                    </div>
                                    <div class="line">
                                        <p class="liner">
                                        Child Age: <?=$row['Age'];?>
                                        </p>
                                    </div>
                                    <button class="btn info" onclick="window.print()">Print Invoice</button>
                                    <button class="btn warning" ><a href="receipt.php" style="text-decoration: none;">Back</a></button>
                                <?php
                            }
                            else
                            {
                                echo '<script>alert("Data not found on the Database!");</script>';
                            }
                        }
                        ?>
                   
    </div>
</body>
</html>