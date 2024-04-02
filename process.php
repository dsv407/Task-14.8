<?php
session_start();
include('functions.php');

$username = $_POST['login'] ?? null;
$password = $_POST['password'] ?? null;

checkPassword($username,$password);

if (null !== $username || null !== $password) {
    if($_SESSION['auth']){
        header("Location: personal.php");
    }else{
        header("Location: index.php");
    }
}
?>