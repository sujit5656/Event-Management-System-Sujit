<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Event Gallery</title>

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

.gallery-title{
text-align:center;
color:#8b0000;
font-weight:bold;
margin:40px 0;
}

/* Gallery */

.gallery-img{

width:100%;

height:220px;

object-fit:cover;

border-radius:6px;

transition:0.3s;

box-shadow:0 0 10px rgba(0,0,0,0.15);
}

.gallery-img:hover{

transform:scale(1.05);
}

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
<a class="nav-link d-inline" href="admin">Admin Panel</a>

<a class="logout-btn" href="login.php">
Logout
</a>

</div>

</div>

</nav>

<div class="container">

<h2 class="gallery-title">
Our Event Gallery
</h2>

<div class="row g-3">

<div class="col-md-3">
<img src="https://images.unsplash.com/photo-1519225421980-715cb0215aed?w=800" class="gallery-img">
</div>

<div class="col-md-3">
<img src="https://images.unsplash.com/photo-1464366400600-7168b8af9bc3?w=800" class="gallery-img">
</div>

<div class="col-md-3">
<img src="https://images.unsplash.com/photo-1511795409834-ef04bbd61622?w=800" class="gallery-img">
</div>

<div class="col-md-3">
<img src="https://images.unsplash.com/photo-1519741497674-611481863552?w=800" class="gallery-img">
</div>

<div class="col-md-3">
<img src="https://images.unsplash.com/photo-1511285560929-80b456fea0bc?w=800" class="gallery-img">
</div>

<div class="col-md-3">
<img src="https://images.unsplash.com/photo-1511578314322-379afb476865?w=800" class="gallery-img">
</div>

<div class="col-md-3">
<img src="https://images.unsplash.com/photo-1520854221256-17451cc331bf?w=800" class="gallery-img">
</div>

<div class="col-md-3">
<img src="https://images.unsplash.com/photo-1519167758481-83f550bb49b3?w=800" class="gallery-img">
</div>

<div class="col-md-3">
<img src="https://images.unsplash.com/photo-1515934751635-c81c6bc9a2d8?w=800" class="gallery-img">
</div>

<div class="col-md-3">
<img src="https://images.unsplash.com/photo-1513278974582-3e1b4a4fa21d?w=800" class="gallery-img">
</div>

<div class="col-md-3">
<img src="https://images.unsplash.com/photo-1522673607200-164d1b6ce486?w=800" class="gallery-img">
</div>

<div class="col-md-3">
<img src="https://images.unsplash.com/photo-1517457373958-b7bdd4587205?w=800" class="gallery-img">
</div>

</div>

</div>

<footer>

© 2026 Event Management System

</footer>

</body>
</html>