<?php
// Establish a database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "invoice";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Retrieve the receipt ID submitted through the form
if (isset($_POST['receiptId'])) {
  $receiptId = $_POST['receiptId'];

  // Retrieve the receipt data from the database table using the ID
  $sql = "SELECT * FROM tb_invoices WHERE id = $receiptId";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // Process the receipt data and generate the receipt content to be printed
    $receiptContent = '';

    while ($row = $result->fetch_assoc()) {
      // Customize the receipt content based on your requirements
      $receiptHTML .= '<h4>Receipt ID: ' . $row['id'] . '</h4>';
      $receiptHTML .= '<p>First Name: ' . $row['FirstName'] . '</p>';
      $receiptHTML .= '<p>Last Name: ' . $row['LastName'] . '</p>';
      $receiptHTML .= '<p>Email Address: ' . $row['Email'] . '</p>';
      $receiptHTML .= '<p>Check_In_Date: ' . $row['Check_in'] . '</p>';
      $receiptHTML .= '<p>Check_Out_Date: ' . $row['Check_out'] . '</p>';
      $receiptHTML .= '<p>Room: ' . $row['Room'] . '</p>';
      $receiptHTML .= '<p>Gender: ' . $row['Gender'] . '</p>';
      $receiptHTML .= '<p>Child Age: ' . $row['Age'] . '</p>';
      // Add more fields as necessary
    }

    // Print the receipt content
    echo $receiptContent;
  } else {
    echo "No receipt found with ID: $receiptId";
  }
}

$conn->close();
?>


