<?php
$db=mysqli_connect("localhost", "root", "", "online_flight_management");



$sql= "SELECT* FROM Flight WHERE Departure=Depart AND Arrival= Arrive "; /* Depart and Arrive are the locations selected in the page that are passed to the query*/
$result=mysqli_query($db,$sql);
while($row= mysqli_fetch_assoc($result))
{
    echo "<tr>";
    echo "<td>" . $row[""] . "</td>";                       /* These selected data are then presented in the following matter */
    echo "<td>" . $row["Flight Code:"] . "</td";
    echo "<td>" . $row["Airline Code:"] . "</td";
    echo "<td>" . $row["Departure point:"] . "</td";
    echo "<td>" . $row["Arrival point:"] . "</td";
    echo "<td>" . $row["Time:"] . "</td";
    echo "<td>" . $row["Date"] . "</td";
    echo "</tr>"; 
}

?>