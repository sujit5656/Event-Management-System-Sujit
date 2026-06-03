<?php

session_start();

if(!isset($_SESSION['admin']))
{
    header("Location: admin-login.php");
    exit();
}

?>

<!DOCTYPE html>
<html>

<head>

<title>Manage Events</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
background:#f5f5f5;
font-family:Arial,sans-serif;
}

.sidebar{
width:250px;
height:100vh;
background:#8b0000;
position:fixed;
left:0;
top:0;
padding-top:20px;
}

.sidebar h3{
color:white;
text-align:center;
margin-bottom:30px;
}

.sidebar a{
display:block;
color:white;
padding:15px;
text-decoration:none;
}

.sidebar a:hover{
background:#6f0000;
}

.main-content{
margin-left:260px;
padding:30px;
}

.card-box{
background:white;
padding:25px;
border-radius:10px;
box-shadow:0 0 10px rgba(0,0,0,0.1);
margin-bottom:25px;
}

.event-item{
background:#fff;
padding:15px;
border-left:5px solid #8b0000;
margin-bottom:15px;
border-radius:5px;
}

.btn-add{
background:#8b0000;
color:white;
font-weight:bold;
}

.btn-add:hover{
background:#6f0000;
color:white;
}

</style>

</head>

<body>

<div class="sidebar">

<h3>EVENTO ADMIN</h3>

<a href="dashboard.php">Dashboard</a>

<a href="manage-bookings.php">
Manage Bookings
</a>

<a href="manage-events.php">
Manage Events
</a>

<a href="manage-vendors.php">
Manage Vendors
</a>

<a href="manage-feedback.php">
Manage Feedback
</a>

<a href="logout.php">
Logout
</a>

</div>

<div class="main-content">

<h2 class="mb-4">
Manage Events
</h2>

<div class="card-box">

<h4 class="mb-3">
Current Event Packages
</h4>

<div class="event-item">
🎉 Birthday Premium Package
</div>

<div class="event-item">
💍 Wedding Premium Package
</div>

<div class="event-item">
🎊 Reception Premium Package
</div>

<div class="event-item">
📸 Photography & Videography
</div>

<div class="event-item">
🎶 Sangeet Night Premium Package
</div>

<div class="event-item">
🌸 Mehendi Premium Package
</div>

</div>

<div class="card-box">

<h4 class="mb-4">
Add New Event
</h4>

<form>

<div class="mb-3">

<label class="form-label">
Event Name
</label>

<input
type="text"
class="form-control"
placeholder="Enter Event Name">

</div>

<div class="mb-3">

<label class="form-label">
Description
</label>

<textarea
class="form-control"
rows="4"
placeholder="Enter Event Description"></textarea>

</div>

<div class="mb-3">

<label class="form-label">
Price (₹)
</label>

<input
type="number"
class="form-control"
placeholder="Enter Price">

</div>

<div class="mb-3">

<label class="form-label">
Event Image
</label>

<input
type="file"
class="form-control">

</div>

<button
type="submit"
class="btn btn-add">

Add Event

</button>

</form>

</div>

</div>

</body>
</html>