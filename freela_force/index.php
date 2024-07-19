<?php
include("config.php");

if(!isset($_SESSION['user'])){
    header("location:entrar.php");
} else{
    header("location:dashboard.php");
}


