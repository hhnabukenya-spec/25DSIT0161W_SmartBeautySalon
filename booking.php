<!DOCTYPE html>
<html>
<head>
<title>Book Appointment - Smart Beauty Salon</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

<h1>Book an Appointment</h1>

<form action="process_booking.php"method="POST">

<label>Full Name:</label><br>
<input type="text" name="fullname"><br><br>

<label>Email:</label><br>
<input type="email" name="email"><br><br>

<label>Phone Number:</label><br>
<input type="tel" name="phone" required><br><br>

<select name="service" required><br>
<option value="">--select service--</option>
<option value="Hair">Hair Styling</option>
<option value="Makeup"> Makeup</option>
<option value="Manicure"> Manicure</option>
<option value="Pedicure"> Pedicure</option>
<option value="Facial Treatment"> facial Treatment</option>
<option value="Men's Haircutst">Men's Haircut</option>
</select>

<br><br>

<label>Appointment Date:</label><br>
<input type="date" name="date"><br><br>

<input type="submit" value="Book Appointment">

</form>

<br>

<a href="index.php">Back to Home</a>

</body>
</html>