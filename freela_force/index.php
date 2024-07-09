<?php
include("config.php");

if(!isset($_SESSION['user'])){
    header("location:/freela-force/freela_force/signin.php");
} else{
    header("location: /freela-force/freela_force/dashboard.php");
}


