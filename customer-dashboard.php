<?php
session_start();

if(!isset($_SESSION['customer_email']))
{
    header("Location: login.php");
    exit();
}

$email = $_SESSION['customer_email'];
?>

<!DOCTYPE html>

<html>
<head>

<title>Customer Dashboard</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
background:#f5f5f5;
}

.navbar{
background:#990000;
}

.navbar a{
color:white !important;
font-weight:bold;
}

.logout-btn{
background:#ff6b6b;
padding:8px 15px;
border-radius:5px;
text-decoration:none;
color:white !important;
}

.table-head{
background:#990000;
color:white;
}

.view-btn{
background:#990000;
color:white;
padding:5px 15px;
border-radius:5px;
text-decoration:none;
}

</style>

</head>

<body>

<nav class="navbar navbar-expand-lg">

<div class="container">

<a class="navbar-brand text-white">
EVENTO
</a>

<div class="ms-auto">

<a href="index.php" class="me-3 text-white text-decoration-none">
Home
</a>

<a href="booking.php" class="me-3 text-white text-decoration-none">
Book Now
</a>

<a href="customer-dashboard.php" class="me-3 text-white text-decoration-none">
My Dashboard
</a>

<a href="logout.php" class="logout-btn">
Logout
</a>

</div>

</div>

</nav>

<div class="container mt-5">

<h1 class="text-center text-danger">
Welcome, <?php echo $email; ?>
</h1>

<hr>

<h3>Your Booking History</h3>

<table class="table table-bordered">

<tr class="table-head">
<th>Booking ID</th>
<th>Event Type</th>
<th>Status</th>
<th>Action</th>
</tr>

<tr>
<td>EVT-1001</td>
<td>Birthday Premium Package</td>
<td>Confirmed</td>
<td>
<a href="payment-slip.php" class="view-btn">
View Slip
</a>
</td>
</tr>

</table>

</div>

</body>
</html>
