<?php
session_start();



if($_SERVER['REQUEST_METHOD']=='POST') {
  $email=$_POST['email'];
  $password=$_['pass'];

  $database_email = 'karkikusal16@gmail.com';
  $database_password = '12345karki';

  }

?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<form action="check.php" method="POST">
  <fieldset LOGIN>
    <legend>LOGIN</legend>
    <div class="mb-5">
      <label    class="form-label">Email:</label>
      <input type="text" name="email" class="form-control">
    </div>
    <br><div class="mb-3">
      <label  class="form-label">Password:</label>
      <input type="text" name="pass" class="form-control" >
    </div>
      </select>
    

      

    <button type="submit" class="btn btn-primary">login</button>
  </fieldset>
</form>
</body>
</html>