<?php

 // initialize session and validate authentication
include_once('connect.php');
session_start();
if (!isset($_SESSION['authenticate'])) {
        echo "<h2 style='color:red;text-align:center;'>Direct access is not allowed. Redirecting....<h2>";
        header("refresh:3;url=./Login_in.php");
        die();
    }

$error = false;
if(isset($_POST['register'])){

    // below code use for sanitze use inputs

    $flight_id = $_POST['flight_id'];
    $flight_id = htmlspecialchars($flight_id);
    $flight_id = strip_tags($flight_id);

    $name = $_POST['name'];
    $name = htmlspecialchars($name);
    $name = strip_tags($name);
    
    $address = $_POST['address'];
    $address = htmlspecialchars($address);
    $address = strip_tags($address);
        
    $contact = $_POST['contact'];
    $contact = htmlspecialchars($contact);
    $contact = strip_tags($contact);
   
    
    
    // below code insert data into employee table
    
        $sql = "insert into booked_flight(flight_id, name, address,contact) values ('$flight_id', '$name' ,'$address' ,'$contact')";
        if(mysqli_query($conn, $sql)){
            $successMsg = 'Thank you. Your Booking Done.';
        }
    

}
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Register</title>
  <link rel="stylesheet" href="./css/style2.css">
</script>
</head>
<body class="align">
  <div class="grid align__item">
    <div class="register">
    <img class="site__logo" src="../Online Flight Booking Management System/Air logo/2.png" width="200" height="140">
      <h2>Welcome to Booking Flight</h2>
       <form class="form"  method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
                <?php
                    if(isset($successMsg)){
                 ?>
                        <div>
                            <span></span>
                            <?php echo $successMsg; ?>
                        </div>
                <?php
                    }
                ?>
                <table>
                       <tr> <td> <label>Flight_id</label></td>
                       	    <td> <div class="form__field"><input type="text" name="flight_id" required="">
                                 </div> 
                            </td> 
                       </tr>
                       <tr> <td> <label>Enter your name</label></td>
                       	    <td> <div class="form__field"><input type="text" name="name"  autocomplete="off" required="">
                                 </div> 
                            </td> 
                        </tr> 
                        <tr> <td> <label>Enter your address</label></td>
                       	    <td> <div class="form__field"><input  type="contact_no" name="address" autocomplete="off" required="">
                                 </div> 
                            </td> 
                        </tr> 
                        <tr> <td> <label>Enter your Email or Number</label></td>
                       	    <td> <div class="form__field"><input type="email,number" name="contact" autocomplete="off" required="">
                                 </div> 
                            </td> 
                        </tr> 
                </table>
                <br>
                <div >
                    <center><input type="submit" name="register" value="Add Flight" ></center>
                </div>
               
            </form>
             <a href="./display.php"><button >Show Flight list</button></a> 
                <br>
              <a href="./logout.php"><button>Log Out</button></a> 
  </div>

</body>
</html>
  
</body>
</html>
