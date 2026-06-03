<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Our Premium Services</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
background:#f5f5f5;
font-family:Arial, Helvetica, sans-serif;
}

/* Navbar */

.custom-nav{
background:#8b0000;
padding:12px 20px;
}

.logo{
font-size:28px;
font-weight:bold;
color:white;
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

/* Heading */

.page-title{
text-align:center;
color:#8b0000;
font-weight:bold;
margin:40px 0;
}

/* Cards */

.service-card{

background:white;

border-radius:8px;

overflow:hidden;

box-shadow:0 0 12px rgba(0,0,0,0.12);

transition:0.3s;

height:100%;
}

.service-card:hover{
transform:translateY(-8px);
}

.service-card img{
width:100%;
height:220px;
object-fit:cover;
}

.service-content{
padding:15px;
}

.service-content h5{
color:#8b0000;
font-weight:bold;
}

.price{
font-size:20px;
font-weight:bold;
color:#8b0000;
margin:10px 0;
}

.select-btn{
background:#8b0000;
color:white;
border:none;
padding:8px 18px;
font-weight:bold;
}

.select-btn:hover{
background:#6d0000;
color:white;
}

/* Footer */

footer{
background:black;
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

<a class="nav-link d-inline" href="index.php">Home</a> <a class="nav-link d-inline" href="services.php">Services</a> <a class="nav-link d-inline" href="gallery.php">Gallery</a> <a class="nav-link d-inline" href="feedback.php">Feedback</a> <a class="nav-link d-inline" href="booking.php">Book Now</a> <a class="nav-link d-inline" href="admin">Admin Panel</a>

<a class="logout-btn" href="login.php">
Logout
</a>

</div>

</div>

</nav>

<!-- Heading -->

<div class="container">

<h2 class="page-title">
Our Premium Services
</h2>

<div class="row g-4">

<!-- Card 1 -->

<div class="col-md-4">

<div class="service-card">

<img src="https://images.unsplash.com/photo-1519741497674-611481863552?w=800">

<div class="service-content">

<h5>Birthday Premium Package</h5>

<p>
Theme-based decoration, balloons, cake arrangement and full event support.
</p>

<div class="price">
Rs. 80,000
</div>

<a href="booking.php" class="btn select-btn">
Select Package
</a>

</div>

</div>

</div>

<!-- Card 2 -->

<div class="col-md-4">

<div class="service-card">

<img src="https://images.unsplash.com/photo-1511578314322-379afb476865?w=800">

<div class="service-content">

<h5>Reception Premium Package</h5>

<p>
Elegant stage setup, lighting, guest management and photography.
</p>

<div class="price">
Rs. 1,50,000
</div>

<a href="booking.php" class="btn select-btn">
Select Package
</a>

</div>

</div>

</div>

<!-- Card 3 -->

<div class="col-md-4">

<div class="service-card">

<img src="https://images.unsplash.com/photo-1520854221256-17451cc331bf?w=800">

<div class="service-content">

<h5>Photography & Videography</h5>

<p>
Full day coverage, candid photography, cinematic wedding films.
</p>

<div class="price">
Rs. 60,000
</div>

<a href="booking.php" class="btn select-btn">
Select Package
</a>

</div>

</div>

</div>

<!-- Card 4 -->

<div class="col-md-4">

<div class="service-card">

<img src="https://images.unsplash.com/photo-1464366400600-7168b8af9bc3?w=800">

<div class="service-content">

<h5>Sangeet Night Package</h5>

<p>
DJ setup, lighting effects and complete stage management.
</p>

<div class="price">
Rs. 1,00,000
</div>

<a href="booking.php" class="btn select-btn">
Select Package
</a>

</div>

</div>

</div>

<!-- Card 5 -->

<div class="col-md-4">

<div class="service-card">

<img src="https://images.unsplash.com/photo-1511285560929-80b456fea0bc?w=800">

<div class="service-content">

<h5>Mehendi Premium Package</h5>

<p>
Traditional decoration, artists and complete mehendi arrangements.
</p>

<div class="price">
Rs. 70,000
</div>

<a href="booking.php" class="btn select-btn">
Select Package
</a>

</div>

</div>

</div>

<!-- Card 6 -->

<div class="col-md-4">

<div class="service-card">

<img src="https://images.unsplash.com/photo-1519225421980-715cb0215aed?w=800">

<div class="service-content">

<h5>Wedding Premium Package</h5>

<p>
Luxury wedding planning, catering, venue setup and photography.
</p>

<div class="price">
Rs. 3,50,000
</div>

<a href="booking.php" class="btn select-btn">
Select Package
</a>

</div>

</div>

</div>

</div>

</div>

<footer>

© 2026 Event Management System

</footer>

</body>
</html>
