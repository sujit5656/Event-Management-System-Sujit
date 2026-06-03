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

<title>Admin Dashboard</title>

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
text-align:center;
}

.card-box h2{
color:#8b0000;
font-weight:bold;
}

</style>

</head>

<body>

<div class="sidebar">

<h3>EVENTO ADMIN</h3>

<a href="dashboard.php">Dashboard</a>
<a href="manage-bookings.php">Manage Bookings</a>
<a href="manage-events.php">Manage Events</a>
<a href="manage-vendors.php">Manage Vendors</a>
<a href="manage-feedback.php">Manage Feedback</a>
<a href="logout.php">Logout</a>

</div>

<div class="main-content">

<h1 class="mb-4">
Admin Dashboard
</h1>

<div class="row">

<div class="col-md-3">

<div class="card-box">

<h2>25</h2>

<p>Total Bookings</p>

</div>

</div>

<div class="col-md-3">

<div class="card-box">

<h2>10</h2>

<p>Total Events</p>

</div>

</div>

<div class="col-md-3">

<div class="card-box">

<h2>8</h2>

<p>Total Vendors</p>

</div>

</div>

<div class="col-md-3">

<div class="card-box">

<h2>15</h2>

<p>Total Feedbacks</p>

</div>

</div>

</div>

<hr class="my-5">

<h3>Recent Bookings</h3>

<table class="table table-bordered bg-white">

<tr>
<th>ID</th>
<th>Customer</th>
<th>Event</th>
<th>Status</th>
</tr>

<tr>
<td>101</td>
<td>Rahul Sharma</td>
<td>Wedding</td>
<td>Confirmed</td>
</tr>

<tr>
<td>102</td>
<td>Priya Patil</td>
<td>Birthday</td>
<td>Pending</td>
</tr>

<tr>
<td>103</td>
<td>Amit Joshi</td>
<td>Corporate</td>
<td>Confirmed</td>
</tr>

</table>

</div>

</body>
</html>