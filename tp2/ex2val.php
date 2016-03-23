<?php

include 'functions.php';
$user=$_POST["user"];
$checkbox=$_POST["checkbox"];
getHeader(true, 'page de '.$user);
echo ('bonjour '.$user);
setcookie('user',$user, time()+300);
