<?php
$db=mysqli_connect("localhost", "root", "", "online_flight_management");

$Booking_ID = rand(0,1000000000); /* Generates a unique ID for the booking*/
$User_ID;  /*User's ID*/
$FlightID; /* Flight ID of desire from the search list of flights*/
$Seats; /* Demanded quantity*/
$sql= " SELECT Capacity FROM Flight WHERE Flight_code= $FlightID "; 
$result=mysqli_query($db,$sql);

if ($Seats<= $result)
{
    $sql1= "INSERT INTO Booking(Booking_Id, User_ID, Flight_code, Quantity, Registered_Name, Airport)
     VALUES ($Booking_ID, $User_ID, $FlightID, $Seats, (SELECT CONCAT(First_Name, " ", Last_Name) FROM User WHERE User_ID=$User_ID), (SELECT Departure FROM Flight WHERE Flight_code=$FlightID) ) ";
    $result1=mysqli_query($db,$sql1);
    $sqli2="INSERT INTO Flight(Capacity) VALUEs($result-$Seats) WHERE Flight_code=$FlightID"; 
}
else{
    echo "Not enough seats available";
}
/*The Clause checks if the required number of seats is available, if it is then an entry is made into the booking table and the seat count of the flight table is over written with the new capacity  */
?>