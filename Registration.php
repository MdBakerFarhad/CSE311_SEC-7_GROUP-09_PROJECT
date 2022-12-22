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

$Name;      /*All the following variables will have theirs values taken from the front page */

$Address;
$ID= rand(0,1000000000);
$Contact;
$passwrd;
$username;
$type;


$sql = "INSERT INTO users(id, name, address, contact, username, password, type) VALUES ($ID, $Name, $Address,$Contact,$username,$passwrd,$type ";  /*A new record is inserted into the users table */
$results= mysqli_query($db, $sql);

echo "Welcome to our service";

/*Page is then redirected to the user home page*/



?>