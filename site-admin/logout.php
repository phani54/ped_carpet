<?php
session_start();
require "lib/config.php";
require "lib/path.php";
require "lib/secure.php";
if(!empty($_SESSION['rcm_logInUser'])){
    unset($_SESSION['rcm_authenticate']);
    unset($_SESSION['rcm_logInUser']);
    unset($_SESSION['rcm_loginRole']);
    header('location:'.URL);
} else {
    header('location:'.URL);
}
