<?php
// session_start();
$em="karkikusal16@gmail.com";
$pass="12345karki";
$email=$_POST['email'];
$password=$_POST['pass'];
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        if($em == $email && $password == $pass)
        {
            //$_SESSION['auth']=true;
            setcookie('auth',$em,time()+5,"/");
            
        
            header('location: ./index.php');

        }
        else{
            header('location: ./login.php');
        }
    }

?>