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

<title>Manage Vendors</title>

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

<a href="manage-bookings.php">Manage Bookings</a>

<a href="manage-events.php">Manage Events</a>

<a href="manage-vendors.php">Manage Vendors</a>

<a href="manage-feedback.php">Manage Feedback</a>

<a href="logout.php">Logout</a>

</div>

<div class="main-content">

<h2 class="mb-4">
Manage Vendors
</h2>

<div class="card-box">

<h4 class="mb-3">
Vendor List
</h4>

<table class="table table-bordered table-striped">

<thead class="table-dark">

<tr>
<th>ID</th>
<th>Vendor Name</th>
<th>Service</th>
<th>Phone</th>
<th>Email</th>
</tr>

</thead>

<tbody>

<tr>
<td>1</td>
<td>Royal Decor</td>
<td>Wedding Decoration</td>
<td>9876543210</td>
<td>royaldecor@gmail.com</td>
</tr>

<tr>
<td>2</td>
<td>Dream Events</td>
<td>Birthday Planning</td>
<td>9876500000</td>
<td>dreamevents@gmail.com</td>
</tr>

<tr>
<td>3</td>
<td>Pro Events</td>
<td>Corporate Events</td>
<td>9988776655</td>
<td>proevents@gmail.com</td>
</tr>

<tr>
<td>4</td>
<td>Star Planner</td>
<td>Reception Planning</td>
<td>9123456789</td>
<td>starplanner@gmail.com</td>
</tr>

</tbody>

</table>

</div>

<div class="card-box">

<h4 class="mb-4">
Add New Vendor
</h4>

<form>

<div class="mb-3">

<label class="form-label">
Vendor Name
</label>

<input
type="text"
class="form-control"
placeholder="Enter Vendor Name">

</div>

<div class="mb-3">

<label class="form-label">
Service
</label>

<input
type="text"
class="form-control"
placeholder="Wedding Decoration">

</div>

<div class="mb-3">

<label class="form-label">
Phone Number
</label>

<input
type="text"
class="form-control"
placeholder="9876543210">

</div>

<div class="mb-3">

<label class="form-label">
Email Address
</label>

<input
type="email"
class="form-control"
placeholder="vendor@gmail.com">

</div>

<button
type="submit"
class="btn btn-add">

Add Vendor

</button>

</form>

</div>

</div>

</body>
</html>