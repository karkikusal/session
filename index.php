<?php
session_start();

$isLoggedIN = isset($_SESSION['auth']);
if($isLoggedIN){
    echo "login vayo";

}else{
    echo "login xaina";
}


?>












<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page</title>
</head>
<body>
    <h1>WELCOME TO THE PAGE</h1>
</body>
</html>