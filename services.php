<?php
include "db_connect.php";

$sql = "SELECT * FROM tbl_content";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Services - Smart Beauty Salon</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<h1>Our Services</h1>

<?php if (mysqli_num_rows($result) > 0) { ?>
    <div class="services-container">
        <?php while($row = mysqli_fetch_assoc($result)) { ?>
            <div class="service-card">
                <img src="<?php echo $row['image_url']; ?>" alt="<?php echo $row['title']; ?>" width="250">
                <h3><?php echo $row['title']; ?></h3>
                <p><?php echo $row['description']; ?></p>
            </div>
            <br>
        <?php } ?>
    </div>
<?php } else { ?>
    <p>No records found.</p>
<?php } ?>

<a href="index.php">Back to Home</a>

</body>
</html>