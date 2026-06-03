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

<title>Manage Bookings</title>

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

.table-box{
background:white;
padding:20px;
border-radius:10px;
box-shadow:0 0 10px rgba(0,0,0,0.1);
}

.btn-delete{
background:red;
color:white;
border:none;
padding:5px 12px;
border-radius:5px;
}

.btn-delete:hover{
background:darkred;
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
Recent Bookings
</h2>

<div class="table-box">

<table class="table table-bordered table-striped">

<thead class="table-dark">

<tr>

<th>ID</th>

<th>Customer</th>

<th>Event</th>

<th>Date</th>

<th>Vendor</th>

<th>Status</th>

<th>Action</th>

</tr>

</thead>

<tbody>

<tr>

<td>101</td>

<td>Rahul Sharma</td>

<td>Wedding Premium Package</td>

<td>20-06-2026</td>

<td>Royal Decor</td>

<td>
<span class="badge bg-success">
Confirmed
</span>
</td>

<td>
<button class="btn-delete">
Delete
</button>
</td>

</tr>

<tr>

<td>102</td>

<td>Priya Patil</td>

<td>Birthday Premium Package</td>

<td>25-06-2026</td>

<td>Dream Events</td>

<td>
<span class="badge bg-warning text-dark">
Pending
</span>
</td>

<td>
<button class="btn-delete">
Delete
</button>
</td>

</tr>

<tr>

<td>103</td>

<td>Amit Joshi</td>

<td>Corporate Event</td>

<td>28-06-2026</td>

<td>Pro Events</td>

<td>
<span class="badge bg-success">
Confirmed
</span>
</td>

<td>
<button class="btn-delete">
Delete
</button>
</td>

</tr>

<tr>

<td>104</td>

<td>Neha Kulkarni</td>

<td>Reception Premium Package</td>

<td>01-07-2026</td>

<td>Star Planner</td>

<td>
<span class="badge bg-info">
Processing
</span>
</td>

<td>
<button class="btn-delete">
Delete
</button>
</td>

</tr>

</tbody>

</table>

</div>

</div>

</body>
</html>