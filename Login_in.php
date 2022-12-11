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

$sql = "SELECT Pass_word FROM User WHERE User_ID= Id";  /*Id is received from the login page that is used for finding the specific record*/
$results= mysqli_query($db, $sql);
$sql1 = "SELECT Level_of_Access FROM User WHERE User_ID= Id";
$results1= mysqli_query($db, $sql1);


if($results== Password)   /* Password entered in the login page is used to compare with the password of the entered Id if same login is successful*/
{
    echo "Welcome!!"
    if($results1 == 'Admin')
    {
        /*redirect to admin page*/
    }
    else{
        
    }
}
else
{
    echo "Incorrect password or Id! Please try again"; /* The successful login here will redirect the user to the main page of the portal, Link to that page should be tagged in the if clause*/
}




?>