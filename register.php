```php
<?php
include 'db.php';

if(isset($_POST['register']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO client(client_name,email,password)
              VALUES('$name','$email','$password')";

    if(mysqli_query($conn,$query))
    {
        echo "<script>
        alert('Registration Successful');
        window.location='login.php';
        </script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>

<title>Customer Registration</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
background:#f5f5f5;
}

.register-box{
width:450px;
margin:50px auto;
background:white;
padding:30px;
border-radius:10px;
box-shadow:0 0 10px #ccc;
}

.btn-register{
background:#a40000;
color:white;
width:100%;
}

h2{
text-align:center;
color:#a40000;
margin-bottom:20px;
}

</style>

</head>

<body>

<div class="register-box">

<h2>Create Account</h2>

<form method="POST">

<div class="mb-3">
<label>Full Name</label>
<input type="text" name="name" class="form-control" required>
</div>

<div class="mb-3">
<label>Email</label>
<input type="email" name="email" class="form-control" required>
</div>

<div class="mb-3">
<label>Password</label>
<input type="password" name="password" class="form-control" required>
</div>

<button type="submit" name="register" class="btn btn-register">
Register
</button>

</form>

<br>

<center>

Already Have Account?

<a href="login.php">
Login Here
</a>

</center>

</div>

</body>
</html>
```
