<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Booking Confirmation</title>
</head>
<body>
    <h1>Rohirrim Tour Booking Confirmation</h1>

<?php
    

    
    $firstname     = isset($_POST["firstname"]) ? $_POST["firstname"] : "";
    $lastname      = isset($_POST["lastname"]) ? $_POST["lastname"] : "";
    $age           = isset($_POST["age"]) ? $_POST["age"] : "";
    $species       = isset($_POST["species"]) ? $_POST["species"] : "Not specified";

    $accommodation = isset($_POST["accom"]) ? "Yes" : "No";
    $fourDayTour   = isset($_POST["4day"]) ? "Yes" : "No";
    $tenDayTour    = isset($_POST["10day"]) ? "Yes" : "No";

    $menu          = isset($_POST["menu"]) ? $_POST["menu"] : "None";
    $date          = isset($_POST["date"]) ? $_POST["date"] : "";
    $travellers    = isset($_POST["partySize"]) ? $_POST["partySize"] : "";

   
    echo "<p>Welcome, <strong>$firstname $lastname</strong>!</p>";
    echo "<p>Age: $age</p>";
    echo "<p>Species: $species</p>";

    echo "<h3>Trip Details</h3>";
    echo "<ul>";
    echo "<li>Accommodation: $accommodation</li>";
    echo "<li>4 Day Tour: $fourDayTour</li>";
    echo "<li>10 Day Tour: $tenDayTour</li>";
    echo "</ul>";

    echo "<p>Menu preference: <strong>$menu</strong></p>";
    echo "<p>Date: $date</p>";
    echo "<p>Number of travellers: $travellers</p>";
?>

</body>
</html>



