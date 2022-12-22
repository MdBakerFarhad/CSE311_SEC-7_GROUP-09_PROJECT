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

$Booking_ID = rand(0,1000000000); /* Generates a unique ID for the booking*/
$User_ID;  /*User's ID*/
$Name;
$Address;
$Contact;
$FlightID; /* Flight ID of desire from the search list of flights*/
$Seats; /* Demanded quantity*/
$sql= " SELECT seats FROM flight_list WHERE id= $FlightID "; 
$result=mysqli_query($db,$sql);

if ($Seats<= $result)
{
    $sql1= "INSERT INTO booked_flight(id, flight_id,name,address,contact)
     VALUES ($Booking_ID,$FlightID,$Name,$Address,$Contact)";
    $sqli2="INSERT INTO flight_list(seats) VALUES($result-$Seats) WHERE id=$FlightID"; 
    echo $Booking_ID;
}
else{
    echo "Not enough seats available";
}
/*The Clause checks if the required number of seats is available, if it is then an entry is made into the booking table and the seat count of the flight table is over written with the new capacity  */
?>
