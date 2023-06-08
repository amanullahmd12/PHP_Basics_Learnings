<?php

session_start();

if (!isset($_SESSION['counter'])) {
    $_SESSION['counter'] = 0;
}


if (!isset($_COOKIE['counter'])) {
    setcookie('counter', 0, time() + 3600); 
}


$_SESSION['counter']++;

setcookie('counter', $_COOKIE['counter'] + 1, time() + 3600); // Cookie expires in 1 hour


echo "Session Counter: " . $_SESSION['counter'] . "<br>";


echo "Cookie Counter: " . $_COOKIE['counter'] . "<br>";
?>
