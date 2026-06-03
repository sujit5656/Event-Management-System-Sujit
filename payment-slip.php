<?php
session_start();

if(!isset($_SESSION['full_name']))
{
    header("Location: booking.php");
    exit();
}

$booking_id = "EVT" . rand(10000,99999);
?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Booking Confirmation Slip</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
background:#f5f5f5;
font-family:Arial, sans-serif;
}

.custom-nav{
background:#8b0000;
padding:12px 20px;
}

.logo{
color:white;
font-size:28px;
font-weight:bold;
text-decoration:none;
}

.nav-link{
color:white !important;
font-weight:600;
margin-left:12px;
}

.logout-btn{
background:#d9534f;
color:white;
padding:6px 15px;
border-radius:5px;
text-decoration:none;
margin-left:10px;
}

.slip-box{
background:white;
max-width:900px;
margin:40px auto;
padding:35px;
border-radius:10px;
box-shadow:0 0 15px rgba(0,0,0,0.1);
border:2px solid #8b0000;
}

.success{
text-align:center;
margin-bottom:30px;
}

.success h1{
color:#8b0000;
font-weight:bold;
}

.success p{
font-size:18px;
color:#198754;
font-weight:bold;
}

.table td{
padding:12px;
}

.table td:first-child{
background:#8b0000;
color:white;
font-weight:bold;
width:35%;
}

.btn-download{
background:#8b0000;
color:white;
font-weight:bold;
padding:10px 25px;
border:none;
border-radius:5px;
text-decoration:none;
}

.btn-download:hover{
background:#6f0000;
color:white;
}

.btn-home{
background:white;
color:#8b0000;
border:1px solid #8b0000;
font-weight:bold;
padding:10px 25px;
text-decoration:none;
border-radius:5px;
}

.btn-home:hover{
background:#8b0000;
color:white;
}

footer{
background:#8b0000;
color:white;
text-align:center;
padding:20px;
margin-top:40px;
}

/* PDF download ke waqt navbar aur buttons hide */

@media print {

.custom-nav,
footer,
.button-section{
display:none;
}

body{
background:white;
}

.slip-box{
border:none;
box-shadow:none;
margin:0;
max-width:100%;
}

}

</style>

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark custom-nav">

<div class="container-fluid">

<a class="logo" href="index.php">
EVENTO
</a>

<div class="ms-auto">

<a class="nav-link d-inline" href="index.php">Home</a>
<a class="nav-link d-inline" href="services.php">Services</a>
<a class="nav-link d-inline" href="gallery.php">Gallery</a>
<a class="nav-link d-inline" href="feedback.php">Feedback</a>
<a class="nav-link d-inline" href="booking.php">Book Now</a>

<a class="logout-btn" href="login.php">
Logout
</a>

</div>

</div>

</nav>

<div class="container">

<div class="slip-box">

<div class="success">

<h1>Booking Success!</h1>

<p>Your event has been successfully booked!</p>

<small>Save your booking details below.</small>

</div>

<table class="table table-bordered">

<tr>
<td>Booking ID</td>
<td><?php echo $booking_id; ?></td>
</tr>

<tr>
<td>Customer Name</td>
<td><?php echo $_SESSION['full_name']; ?></td>
</tr>

<tr>
<td>Phone Number</td>
<td><?php echo $_SESSION['phone']; ?></td>
</tr>

<tr>
<td>Email</td>
<td><?php echo $_SESSION['email']; ?></td>
</tr>

<tr>
<td>Event Type</td>
<td><?php echo $_SESSION['event_type']; ?></td>
</tr>

<tr>
<td>Start Date</td>
<td><?php echo $_SESSION['start_date']; ?></td>
</tr>

<tr>
<td>End Date</td>
<td><?php echo $_SESSION['end_date']; ?></td>
</tr>

<tr>
<td>Guest Count</td>
<td><?php echo $_SESSION['guest_count']; ?></td>
</tr>

<tr>
<td>Payment Status</td>
<td>Completed</td>
</tr>

<tr>
<td>Transaction ID</td>
<td>TXN<?php echo rand(100000,999999); ?></td>
</tr>

<tr>
<td>Amount Paid</td>
<td>Rs. 80000.00</td>
</tr>

</table>

<div class="text-center mt-4 button-section">

<button onclick="window.print()" class="btn-download">
Download Slip (PDF)
</button>

<a href="index.php" class="btn-home ms-2">
Back to Home
</a>

</div>

</div>

</div>

<footer>

© 2026 Evento - Premium Event Management. All rights reserved.

</footer>

</body>
</html>