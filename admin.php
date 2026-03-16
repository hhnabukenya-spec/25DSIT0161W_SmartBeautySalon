<?php
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

<table border="1" cellpadding="10">
<tr>
<th>ID</th>
<th>Full Name</th>
<th>Email</th>
<th>Phone</th>
<th>Service</th>
<th>Appointment Date</th>
</tr>

<?php
while($row = mysqli_fetch_assoc($result)){
?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['fullname']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['phone']; ?></td>
<td><?php echo $row['service']; ?></td>
<td><?php echo $row['appointment_date']; ?></td>
</tr>
<?php
}
?>

</table>

</body>
</html>