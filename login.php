<?php
session_start();

if (isset($_SESSION['email'], $_SESSION['password'])) {
  header('Location: admin.php');
  exit();
}else {
  $error_message = "Email və ya şifrə yanlışdır!";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="post" action="">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Login</button>
</form>

</body>
</html>

