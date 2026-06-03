<?php

$message = false;

if(isset($_POST['submit_feedback']))
{
    $message = true;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Customer Feedback</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
background:#f5f5f5;
font-family:Arial, Helvetica, sans-serif;
}

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

.page-title{
text-align:center;
color:#8b0000;
font-weight:bold;
margin-top:30px;
margin-bottom:30px;
}

.feedback-box{
background:white;
padding:30px;
border-radius:10px;
box-shadow:0 0 10px rgba(0,0,0,0.1);
max-width:700px;
margin:auto;
}

.feedback-box h5{
color:#8b0000;
font-weight:bold;
margin-bottom:20px;
}

.btn-feedback{
background:#8b0000;
color:white;
width:100%;
font-weight:bold;
}

.btn-feedback:hover{
background:#6e0000;
color:white;
}

.feedback-cards{
padding:60px 0;
}

.feedback-card{
background:white;
padding:25px;
border-radius:10px;
text-align:center;
box-shadow:0 0 10px rgba(0,0,0,0.1);
height:100%;
}

.feedback-card img{
width:80px;
height:80px;
border-radius:50%;
margin-bottom:15px;
}

.feedback-card p{
font-style:italic;
color:#666;
}

.feedback-card h5{
color:#8b0000;
font-weight:bold;
margin-top:15px;
}

.feedback-card small{
color:gray;
}

.thank-you{
background:white;
padding:40px;
border-radius:10px;
text-align:center;
margin-bottom:30px;
box-shadow:0 0 10px rgba(0,0,0,0.1);
}

.thank-you h1{
font-size:55px;
font-weight:bold;
color:#1f2937;
}

.thank-you h3{
color:#374151;
margin-top:20px;
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

<div class="container mt-4">

<?php if($message){ ?>

<div class="thank-you">

<h1>🤘 Thank you for your feedback!</h1>

<h3>Your review has been submitted successfully.</h3>

</div>

<?php } ?>

<h2 class="page-title">
Customer Feedback
</h2>

<div class="feedback-box">

<h5>Share Your Experience</h5>

<form method="POST">

<div class="mb-3">

<label class="form-label">
Your Name
</label>

<input type="text" class="form-control" placeholder="Admin" required>

</div>

<div class="mb-3">

<label class="form-label">
Your Feedback
</label>

<textarea class="form-control" rows="4" placeholder="How was your experience with Evento?" required></textarea>

</div>

<button type="submit" name="submit_feedback" class="btn btn-feedback">
Submit Feedback
</button>

</form>

</div>

</div>

<div class="container feedback-cards">

<div class="row g-4">

<div class="col-md-4">

<div class="feedback-card">

<img src="https://randomuser.me/api/portraits/women/45.jpg">

<p>
"This Event Management System makes planning special occasions effortless and enjoyable."
</p>

<h5>MR & MRS Gaikwad</h5>

<small>18 Apr 2026, 12:55</small>

</div>

</div>

<div class="col-md-4">

<div class="feedback-card">

<img src="https://randomuser.me/api/portraits/women/65.jpg">

<p>
"Our wedding was beautifully organized and everything went perfectly as planned."
</p>

<h5>Mr & Mrs Joshi</h5>

<small>17 Apr 2026, 15:33</small>

</div>

</div>

<div class="col-md-4">

<div class="feedback-card">

<img src="https://randomuser.me/api/portraits/men/32.jpg">

<p>
"The overall experience was excellent and very smooth. Booking was simple and professional."
</p>

<h5>Mr. John</h5>

<small>17 Apr 2026, 15:31</small>

</div>

</div>

</div>

</div>

<footer>

© 2026 Event Management System

</footer>

</body>
</html>