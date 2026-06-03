<?php

session_start();

if(isset($_POST['login']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username=="admin" && $password=="admin123")
    {
        $_SESSION['admin']="admin";

        header("Location: dashboard.php");
        exit();
    }

    else
    {
        $error="Invalid Username or Password";
    }
}
?>

<!DOCTYPE html>
<html>

<head>

<title>Admin Login</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
background:#f5f5f5;
}

.login-box{
width:400px;
margin:100px auto;
background:white;
padding:30px;
border-radius:10px;
box-shadow:0 0 10px gray;
}

h2{
text-align:center;
color:#8b0000;
margin-bottom:20px;
}

</style>

</head>

<body>

<div class="login-box">

<h2>Admin Login</h2>

<?php
if(isset($error))
{
echo "<div class='alert alert-danger'>$error</div>";
}
?>

<form method="POST">

<input
type="text"
name="username"
class="form-control mb-3"
placeholder="Username"
required>

<input
type="password"
name="password"
class="form-control mb-3"
placeholder="Password"
required>

<button
type="submit"
name="login"
class="btn btn-danger w-100">

Login

</button>

</form>

</div>

</body>
</html>