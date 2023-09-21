<?php


if($_COOKIE['micookie']){
    unset($_COOKIE['micookie']);
    setcookie('micookie','',time());
}

header('Location:ver_cookies.php');