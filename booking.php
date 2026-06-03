<?php
session_start();

if(isset($_POST['book_now']))
{
    $_SESSION['full_name'] = $_POST['full_name'];
    $_SESSION['phone'] = $_POST['phone'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['event_type'] = $_POST['event_type'];
    $_SESSION['start_date'] = $_POST['start_date'];
    $_SESSION['end_date'] = $_POST['end_date'];
    $_SESSION['guest_count'] = $_POST['guest_count'];

    header("Location: payment.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Book Your Event</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
    background:#f5f5f5;
    font-family:Arial, sans-serif;
}

/* Navbar */

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

/* Form */

.page-title{
    text-align:center;
    color:#8b0000;
    font-weight:bold;
    margin-top:20px;
    margin-bottom:25px;
}

.booking-box{
    background:white;
    padding:30px;
    border-radius:10px;
    box-shadow:0 0 10px rgba(0,0,0,0.1);
    max-width:900px;
    margin:auto;
}

.btn-book{
    background:#8b0000;
    color:white;
    width:100%;
    font-weight:bold;
}

.btn-book:hover{
    background:#6f0000;
    color:white;
}

footer{
    background:#8b0000;
    color:white;
    text-align:center;
    padding:20px;
    margin-top:50px;
}

</style>

</head>

<body>

<!-- Navbar -->

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
<a class="nav-link d-inline" href="#">Admin Panel</a>

<a class="logout-btn" href="login.php">
Logout
</a>

</div>

</div>

</nav>

<div class="container">

<h2 class="page-title">
Book Your Event
</h2>

<div class="booking-box">

<form method="POST">

<div class="row">

<div class="col-md-6 mb-3">

<label class="form-label">
Full Name
</label>

<input type="text"
name="full_name"
class="form-control"
placeholder="John Doe"
required>

</div>

<div class="col-md-6 mb-3">

<label class="form-label">
Phone Number
</label>

<input type="text"
name="phone"
class="form-control"
placeholder="+91 9876543210"
required>

</div>

<div class="col-md-6 mb-3">

<label class="form-label">
Email Address
</label>

<input type="email"
name="email"
class="form-control"
placeholder="john@example.com"
required>

</div>

<div class="col-md-6 mb-3">

<label class="form-label">
Event Type
</label>

<select
name="event_type"
class="form-select"
required>

<option value="">
Select Event
</option>

<option>
Birthday Premium Package
</option>

<option>
Wedding Premium Package
</option>

<option>
Reception Premium Package
</option>

<option>
Photography & Videography
</option>

<option>
Sangeet Night Premium Package
</option>

<option>
Mehendi Premium Package
</option>

</select>

</div>

<div class="col-md-6 mb-3">

<label class="form-label">
Start Date
</label>

<input type="date"
name="start_date"
class="form-control"
required>

</div>

<div class="col-md-6 mb-3">

<label class="form-label">
End Date
</label>

<input type="date"
name="end_date"
class="form-control"
required>

</div>

<div class="col-md-6 mb-4">

<label class="form-label">
Guest Count
</label>

<input type="number"
name="guest_count"
class="form-control"
placeholder="500"
required>

</div>

</div>

<button
type="submit"
name="book_now"
class="btn btn-book">

Proceed To Payment

</button>

</form>

</div>

</div>

<footer>

© 2026 Evento - Premium Event Management

</footer>

</body>
</html>