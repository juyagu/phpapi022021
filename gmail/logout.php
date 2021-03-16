<?php 
session_start();
if(isset($_SESSION['token_google'])){
    unset($_SESSION['token']);
    unset($_SESSION['token_google']);
    header('Location:index.php');
}else{
    header('Location:index.php');
}

