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

<title>Manage Feedback</title>

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
}

.btn-delete{
background:red;
color:white;
border:none;
padding:6px 12px;
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

<a href="manage-bookings.php">Manage Bookings</a>

<a href="manage-events.php">Manage Events</a>

<a href="manage-vendors.php">Manage Vendors</a>

<a href="manage-feedback.php">Manage Feedback</a>

<a href="logout.php">Logout</a>

</div>

<div class="main-content">

<h2 class="mb-4">
Manage Feedback
</h2>

<div class="card-box">

<table class="table table-bordered table-striped">

<thead class="table-dark">

<tr>

<th>ID</th>

<th>Customer Name</th>

<th>Feedback</th>

<th>Date</th>

<th>Action</th>

</tr>

</thead>

<tbody>

<tr>

<td>1</td>

<td>Rahul Sharma</td>

<td>
Excellent wedding management service.
Everything was perfectly organized.
</td>

<td>10-06-2026</td>

<td>
<button class="btn-delete">
Delete
</button>
</td>

</tr>

<tr>

<td>2</td>

<td>Priya Patil</td>

<td>
Birthday event decoration was amazing.
</td>

<td>12-06-2026</td>

<td>
<button class="btn-delete">
Delete
</button>
</td>

</tr>

<tr>

<td>3</td>

<td>Amit Joshi</td>

<td>
Corporate event was professionally handled.
</td>

<td>15-06-2026</td>

<td>
<button class="btn-delete">
Delete
</button>
</td>

</tr>

<tr>

<td>4</td>

<td>Neha Kulkarni</td>

<td>
Very satisfied with reception planning.
</td>

<td>18-06-2026</td>

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