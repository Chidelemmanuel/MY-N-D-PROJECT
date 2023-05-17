<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
  ?>

<?php require "dbcon.php" ?>
<!DOCTYPE html>
<html>
<head>
<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {background-color: #f2f2f2;}

.btn {
  border: none;
  background-color: inherit;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
  display: inline-block;
  text-decoration: none;
}

/* On mouse-over */
.btn:hover {background: black;}
.warning {color: orange;}
.danger {color: red;}

.container table th{
background-color: black;
color: #f2f2f2;
}

</style>
</head>
<body>




   


<div class="container" style="overflow-x:auto;">
  <table >  
           <tr>  
                <th>Booked Id</th>  
                <th>First Name</th>  
                <th>Last Name</th>  
                <th>Email</th>  
                <th>Check_in_Date</th>  
                <th>Check_out_Date</th> 
                <th>Room</th> 
                <th>Gender</th> 
                <th>Age</th>
                <th>Submitted_At</th>  
                <th>Action</th>
           </tr> 
           <?php
                        
                            // read all roll from database table
                            $query = "SELECT * FROM tb_invoices";
                            $query_run = mysqli_query($con, $query);

                            if (mysqli_num_rows($query_run) > 0) {
                            
                             foreach($query_run as $row)
                             {
                              ?>
                          
                <tr>
                      <td><?= $row['id']; ?></td>          
                      <td><?= $row['FirstName']; ?></td>   
                      <td><?= $row['LastName']; ?></td>  
                      <td><?= $row['Email']; ?></td>  
                      <td><?= $row['Check_in']; ?></td>  
                      <td><?= $row['Check_out']; ?></td>  
                      <td><?= $row['Room']; ?></td> 
                      <td><?= $row['Gender']; ?></td> 
                      <td><?= $row['Age']; ?></td> 
                      <td><?= $row['Book_at']; ?></td> 
                                 <td>
                                     <a class='btn warning' href="view.php?id=<?= $row['id']; ?>" style='margin:5px;'>View</a>
                                     <form action="delete.php" method="POST" class="">
                                         <button type="submit" name="delete_row" value="<?=$row['id'];?>" class="btn danger">Delete</button>
                                      </form>
                                 </td>
                             </tr>
                             <?php
                        }
                      }         
                      else {
                        # code...
                        echo '<script>alert("No Record Found!");</script>';
                      }

                    ?>
  </table>
  <!-- logged in user information -->
  <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
      <p> <a href="receipt.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
    
</div>

</body>

</html>




 