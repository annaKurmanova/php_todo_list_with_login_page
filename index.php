<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>

<form action="login.php" method="post">
<h3>Login</h3>
<?php
if (isset($_GET['error'])) { ?>

<p><?php echo ($_GET['error'])?></p>
<?php } ?>
<label for="username">Username</label>
<input type="text" name="username">
<label for="username">Password</label>
<input type="password" name="password">

<button type="submit">Login</button>
</form>



</body>
</html>
