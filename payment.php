<?php
session_start();

if(!isset($_SESSION['full_name']))
{
    header("Location: booking.php");
    exit();
}

if(isset($_POST['confirm_payment']))
{
    header("Location: payment-slip.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Payment Page</title>

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

.payment-box{
background:white;
max-width:700px;
margin:40px auto;
padding:30px;
border-radius:10px;
border:1px solid #c0392b;
}

.heading{
text-align:center;
color:#8b0000;
font-weight:bold;
margin-bottom:25px;
}

.qr-box{
text-align:center;
}

.qr-box img{
width:220px;
height:220px;
object-fit:cover;
border:1px solid #ddd;
padding:10px;
}

.btn-pay{
background:#8b0000;
color:white;
font-weight:bold;
width:100%;
margin-top:20px;
}

.btn-pay:hover{
background:#6f0000;
color:white;
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

<div class="payment-box">

<h3 class="heading">
Payment Method
</h3>

<form method="POST">

<div class="text-center mb-4">

<input type="radio" name="payment_method" checked>
 UPI (QR Code)

&nbsp;&nbsp;&nbsp;

<input type="radio" name="payment_method">
 Debit/Credit Card

</div>

<div class="qr-box">

<h5 class="mb-3">
Scan QR to Pay
</h5>

<img src="https://api.qrserver.com/v1/create-qr-code/?size=250x250&data=EVENTO_PAYMENT">

<p class="mt-3">
Payable Amount: Calculated at Checkout
</p>

<small>
Scan using Google Pay, PhonePe or Paytm
</small>

</div>

<hr class="my-4">

<h5 class="text-center mb-3">
Enter Card Details
</h5>

<div class="mb-3">
<label>Cardholder Name</label>
<input type="text" class="form-control" placeholder="Sakshi Kiran Shitke">
</div>

<div class="mb-3">
<label>Card Number</label>
<input type="text" class="form-control" placeholder="7890 8930 7890">
</div>

<div class="row">

<div class="col-md-6 mb-3">
<label>Expiry (MM/YY)</label>
<input type="text" class="form-control" placeholder="04/30">
</div>

<div class="col-md-6 mb-3">
<label>CVV</label>
<input type="password" class="form-control" placeholder="***">
</div>

</div>

<button type="submit"
name="confirm_payment"
class="btn btn-pay">

Pay & Confirm Booking

</button>

</form>

</div>

</body>
</html>