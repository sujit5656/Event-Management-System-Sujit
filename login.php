<?php
session_start();
include 'db.php';

$error = "";

if(isset($_POST['login']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM client WHERE email='$email' AND password='$password'";

    $result = mysqli_query($conn,$query);

    if(mysqli_num_rows($result) > 0)
    {
        $_SESSION['customer_email'] = $email;

        header("Location: customer-dashboard.php");
        exit();
    }
    else
    {
        $error = "Invalid Email or Password";
    }
}
?>

<!DOCTYPE html>
<html>
<head>

<title>Customer Login</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
background:#f5f5f5;
}

.login-box{
width:400px;
margin:80px auto;
background:white;
padding:30px;
border-radius:10px;
box-shadow:0 0 10px #ccc;
}

.btn-login{
background:#a40000;
color:white;
width:100%;
}

h2{
text-align:center;
color:#a40000;
margin-bottom:20px;
}

.error{
color:red;
text-align:center;
margin-bottom:15px;
}

</style>

</head>

<body>

<div class="login-box">

<h2>Customer Login</h2>

<?php
if($error!="")
{
    echo "<div class='error'>$error</div>";
}
?>

<form method="POST">

<div class="mb-3">
<label>Email</label>
<input type="email" name="email" class="form-control" required>
</div>

<div class="mb-3">
<label>Password</label>
<input type="password" name="password" class="form-control" required>
</div>

<button type="submit" name="login" class="btn btn-login">
Login
</button>

</form>

<br>

<center>
New Customer?
<a href="register.php">Register Here</a>
</center>

</div>

</body>
</html>