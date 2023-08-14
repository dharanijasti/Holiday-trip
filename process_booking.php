<!DOCTYPE html>
<html>
<head>
    <title>Holiday Planning</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $no_of_days = $_POST["No_of_days"];
    $email = $_POST["email"];
    $destination = $_POST["Destination"];
    $phn_no = $_POST["Phn_no"];
    $date = $_POST["date"];

    $servername = "localhost";
    $username = "root"; 
    $password = "";     
    $dbname = "holiday_planning"; 

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert data into the database
    $sql = "INSERT INTO bookings (name, no_of_days, email, destination, phn_no, trip_date)
            VALUES ('$name', '$no_of_days', '$email', '$destination', '$phn_no', '$date')";

    if ($conn->query($sql) === TRUE) {
        echo "Booking successful! Your trip has been booked.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} else {
    echo "Invalid request.";
}
?>

