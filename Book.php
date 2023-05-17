<?php
session_start();
// $conn = mysqli_connect("localhost", "root", "", "invoice");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fontawesome-free-6.1.1-web/css/all.css">
    <link rel="stylesheet" href="Book.css">
    <title>Swiss Park Hotel & Suites</title>
</head>
<body>
    <!---nav-bar-->
    <nav>
        <div class="logo">
            <img src=".//Logos and Icons/Swiss Hotel 1.png" alt="">
        </div>
    
        <div class="list">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="room.html">Rooms</a></li>
                <li><a href="About.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="Book.php" id="book">Book Now</a></li>
            </ul>
        </div>
    </nav>

    <!---backdrop--->
    <div class="backdrop"></div>
    <div class="modal">

        <h1>Payment Method</h1>
            <div class="images">
                <div class="image">
                    <img src=".//Logos and Icons/183873_credit card_plastic money_american express_american_express_icon.png" alt="">
                </div>
    
                <div class="image">
                    <img src=".//Logos and Icons/1156750_finance_mastercard_payment_icon.png" alt="">
                </div>
    
                <div class="image">
                    <img src=".//Logos and Icons/294654_visa_icon.png" alt="">
                </div>
            </div>
            
        <h3 class="modal_title">Do you want to continue Payment?</h3>

        <div class="modal_actions">
            <!-- HTML form with a button -->
            <a href="https://dashboard.paystack.com/#/login" class="modal_action">Yes!</a>
            <a href="Book.php" class="modal_action">No!</a>
            <button class="modal__action modal__action--negative btn" type="button"></button>
        </div>
    </div>



<?php 
 if(isset($_SESSION['status']))
{
?>                        
 <?php echo $_SESSION['status']; ?>
                
<?php
 unset($_SESSION['status']);
  }
?>

    <!---container---->
    <div class="container">
        <div class="first-container">
            <form method="post" action="config.php">
                <label for="">Check-in-Date</label>
                <input type="text" class="form-control"  name="Check_in" placeholder="00/00/0000" value="" required>

                <label for="">Check-out-Date</label>
                <input type="text" class="form-control"  name="Check_out" placeholder="00/00/0000" value="" required>
            

            <div class="boxes">
                <div class="box">
                    <select name="Room" id="format">
                        <option selected disabled>ROOMS</option>
                        <option  value="CLASSIC SUPERIOR ROOM">CLASSIC SUPERIOR ROOM</option>
                        <option value="ATLANTIC SUPERIOR ROOM">ATLANTIC SUPERIOR ROOM</option>
                        <option value="CLASSIC SUITES">CLASSIC SUITES</option>
                        <option value="DIPLOMATIC SUITES">DIPLOMATIC SUITES</option>
                        <option value="PRESIDENTIAL SUITES">PRESIDENTIAL SUITES</option>
                    </select>
                </div>
    
                <div class="box-1">
                    <select name="Gender">
                        <option selected disabled>GENDER</option>
                        <option value="Male">MALE</option>
                        <option value="Female">FEMALE</option>
                    </select>
                </div>
                 
                <div class="box-2">
                    <select name="Age" id="">
                        <option selected disabled>CHILDREN</option>
                        <Option value="NIL">NIL</Option>
                        <Option value="1">1</Option>
                        <Option value="2">2</Option>
                        <Option value="3">3</Option>
                        <Option value="4">4</Option>
                        <Option value="5">5</Option>
                    </select>
                </div>
            </div>
            
        </div>

        <div class="line">

        </div>

        <!---second-container-->

        <div class="second-container">
            <h2>Guest Information</h2>

            <div class="details">
                <input type="text" name="FirstName" placeholder="First Name" required>
                <input type="text"  name="LastName" placeholder="Last Name" required>
                <input type="email" name="Email" placeholder="Email Address" required>
            </div>

        </div>
        
        <input type="submit" class="btn" name="submit" value="submit" >

        </form>
  
        
        <button class="btn btnyyy">Book Now</button>
       
    </div>
    <!-- footer -->

    <footer>
        <div class="hotel-logo">
            <img src=".//Logos and Icons/Swiss Hotel 3.png" alt="Coast hotel logo">
        </div>

        <div class="link">
            <a href="https://www.facebook.com/youngozo.dopa"><i class="fab fa-facebook-f"></i></a>
            <a href="https://wa.me/+2349032766169"> <i class="fab fa-whatsapp"></i></a>
            <a href="https://github.com/Chidelemmanuel"><i class="fa-brands fa-youtube" id="youtube"></i>
            <a href="https://www.instagram.com/chidel_emmanuel"><i class="fab fa-instagram"></i></a> 
            <a href="https://www.twitter.com/Ozochi Emmanuel"><i class="fab fa-twitter"></i></a>
        </div>
    </footer>

    </div>
    <script src="app.js"></script>
    
</body>
</html>