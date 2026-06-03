<!DOCTYPE html>
<html>
<head>

<title>Event Management System</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

.hero{
height:90vh;
background:url('https://images.unsplash.com/photo-1511578314322-379afb476865?w=1600');
background-size:cover;
background-position:center;
display:flex;
justify-content:center;
align-items:center;
}

.overlay{
background:rgba(0,0,0,0.6);
padding:40px;
color:white;
text-align:center;
border-radius:10px;
}

.service-box{
padding:20px;
box-shadow:0 0 10px gray;
border-radius:10px;
margin-top:20px;
}

</style>

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

<div class="container">

<a class="navbar-brand">
Event Management System
</a>

<ul class="navbar-nav ms-auto">

<li class="nav-item">
<a class="nav-link" href="index.php">Home</a>
</li>

<li class="nav-item">
<a class="nav-link" href="services.php">Services</a>
</li>

<li class="nav-item">
<a class="nav-link" href="gallery.php">Gallery</a>
</li>

<li class="nav-item">
<a class="nav-link" href="feedback.php">Feedback</a>
</li>

</ul>

</div>

</nav>

<section class="hero">

<div class="overlay">

<h1>Online Event Management System</h1>

<p>Wedding | Birthday | Corporate Events</p>

<a href="booking.php" class="btn btn-danger">
Book Event
</a>

</div>

</section>

<div class="container mt-5">

<h2 class="text-center">
Our Services
</h2>

<div class="row">

<div class="col-md-4">
<div class="service-box">
<h4>Wedding Event</h4>
<p>Beautiful wedding planning.</p>
</div>
</div>

<div class="col-md-4">
<div class="service-box">
<h4>Birthday Event</h4>
<p>Birthday decoration and planning.</p>
</div>
</div>

<div class="col-md-4">
<div class="service-box">
<h4>Corporate Event</h4>
<p>Professional corporate events.</p>
</div>
</div>

</div>

</div>

<footer class="bg-dark text-white text-center p-3 mt-5">

© 2026 Event Management System

</footer>

</body>
</html>