<?php       
    include 'config.php';
    include "data.php";
    include "log_val.php";
    $pass=$child+$adult;
    $query = "INSERT INTO ticket_data (username, trip_type, flight_name, From, destination, date, departing_data, passengers, flight_calss, cost)
    VALUES('$username','$flighttype','Indigo','$from','$dest','$dep','$ret','$pass','$class','$cost')";
?>