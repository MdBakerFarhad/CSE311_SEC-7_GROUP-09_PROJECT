<?php
$db=mysqli_connect("localhost", "root", "", "online_flight_management");

if(!$db)
{
    echo "database connection failed" . mysqli_error();
}
else
{
    echo "database connection successful" . "<br>";
}

$Booking_ID= /*Booking Id provided from cancellation call */
$sql= " DELETE FROM Booking WHERE Booking_Id=$Booking_ID "; 
$result=mysqli_query($db,$sql);

echo "Your Booking has been cancelled"

/*After cancellation should be redirected back to the required page */

?>