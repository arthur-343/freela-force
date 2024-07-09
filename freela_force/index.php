<?php
include("config.php");

if(!isset($_SESSION['user'])){
    header("location:signin.php");
} else{
    header("location: dashboard.php");
}


