<?php

$db = mysqli_connect("localhost", "root" , "", "online_flight_management");

if(!$db)
{
    echo "database connection failed" . mysqli_error();
}
else
{
    echo "database connection successful" . "<br>";
}

$First;      /*All the following variables will have theirs values taken from the front page */
$Last;
$Passport;
$Date_of_Birth;
$ID= rand(0,1000000000);
$Date_of_Membership;
$passwrd;


$sql = "INSERT INTO (User_ID, First_Name, Last_Name, Level_of_Access, Date_of_Membership, Passport_No, DOB, Pass_word) VALUES ($ID, $First, $Last, 'Customer', $Date_of_Membership, $Passport, $Date_of_Birth, $passwrd )";  /*A new record is inserted into the user table , Access level is by default customers as they are the one that register*/
$results= mysqli_query($db, $sql);

echo "Welcome to our service";

/*Page is then redirected to the user home page*/



?>