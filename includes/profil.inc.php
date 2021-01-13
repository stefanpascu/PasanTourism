<?php
if(!isset($_SESSION["useruid"])) { 
    session_start(); 
} 

if (isset($_SESSION["useruid"])) {
    
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';
    
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "changed") {
            header("location: ../profil.php?error=changed");
            exit();
        }
    }
    
    header("location: ../profil.php?error=none");
} else {
    header("location: ../login.php");
    exit();
}

