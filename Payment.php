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

$Booking_ID= /*Booking Id provided from call */
$sql= " SELECT Flight_code FROM Booking WHERE Booking_Id=$Booking_ID  "; 
$result=mysqli_query($db,$sql);
$sql1= " SELECT Airline_code FROM Flight WHERE Flight_code= $result";
$result1=mysqli_query($db,$sql1);
$sql2="SELECT Ticket_fare_rate FROM Airlines WHERE AIRLINE_code";
$rate=mysqli_query($db,$sql2);
$sql3="SELECT Distance FROM Airport WHERE Country=(SELECT Arrival FROM Flight WHERE Flight_code=$result)";
$Distance=mysqli_query($db,$sql3);
$sql4="SELECT Quantity FROM Booking WHERE Booking_Id=$Booking_ID";
$seats=mysqli_query($db,$sql4);

$Total= $rate*$Distance*$seats;

echo "Your Total amount", $Total;

/*The page redirects hypothetically to a payment site*/

$sql5="INSERT INTO Booking (payment) VALUES ('Payment complete') WHERE Booking_Id=$Booking_ID";
$result=mysqli_query($db,$sql5);

echo "Payment status Updated";


echo "Your Booking has been cancelled"

/*After cancellation should be redirected back to the required page */

?>