<?php 

    // initialize session and validate authentication

    session_start();
    if (!isset($_SESSION['authenticate'])) {
        echo "<h2 style='color:red;text-align:center;'>Access Denied. Redirecting....<h2>";
        header("refresh:3;url=./Login_in.php");
        die();
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <title>Flight List</title>
  <link rel="stylesheet" href="./css/style2.css">
  <link rel="stylesheet" href="./css/table.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    
</head>
<body class="">
  <div class="">
  	<div class="register">
    <h3><u>Flight List</u></h3>
	<br>
  
<table>
	<tr><th >ID</th> 
        <th>Flight ID</th> 
        <th>Name</th>
        <th>Address</th>
        <th>Contact</th>
	</tr>

  <!-- connect to database get display data from employee table -->
       <?php
       include_once('connect.php');
       $sql = "SELECT id, name, address, contact, flight_id FROM booked_flight";
       $result = $conn-> query ($sql);
       if ($result-> num_rows > 0) {
    	   while ($row = $result -> fetch_assoc()) {
    		echo "<tr><td>".$row["id"]."</td><td>".$row["flight_id"]."</td><td>". $row["name"]."</td><td>".$row["address"]."</td><td>".$row["contact"]."</td></tr>";
    	   }
    	   echo "</table>";
       }else{
    	echo "No record found";
       }
       $conn->close();
       ?>
</table>
      
<br><br>
 <a href="./Booking.php"><button>Book New Flight</button></a>  
 <br>
 <a href="./logout.php"><button>Log Out</button></a>   
  	</div>
  </div>
</body>
</html>
