<?php

include 'db_connect.php';

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$service = $_POST['service'];
$date = $_POST['date'];

$sql = "INSERT INTO bookings (fullname, email, phone, service, appointment_date)
VALUES ('$fullname', '$email', '$phone', '$service', '$date')";

if(mysqli_query($conn, $sql)){
    echo "Appointment booked successfully!";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);

?>