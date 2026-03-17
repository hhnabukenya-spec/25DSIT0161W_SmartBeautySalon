<?php
session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

include "db_connect.php";

$sql = "SELECT * FROM bookings";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin - View Bookings</title>
<link rel="stylesheet" href="css/style.css">
</head>

<body>

<h1>Salon Appointments</h1>

<table border="1" cellpadding="15">
<tr>
<th>ID</th>
<th>Full Name</th>
<th>Email</th>
<th>Phone</th>
<th>Service</th>
<th>Appointment Date</th>
</tr>

<?php
$count = 1;

while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
        <td>".$count."</td>
        <td>".$row['fullname']."</td>
        <td>".$row['email']."</td>
        <td>".$row['phone']."</td>
        <td>".$row['service']."</td>
        <td>".$row['appointment_date']."</td>
    </tr>";
    $count++;
}

for($i = $count; $i <= 10; $i++) {
    echo "<tr>
        <td>".$i."</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>";
}
?>

</body>
</html>