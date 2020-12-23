<?php
if(!isset($_SESSION["useruid"])) { 
    session_start(); 
} 

if (isset($_SESSION["useruid"])) {
    //code..
} else {
    header("location: index.php");
    exit();
}

if (isset($_SESSION["useruid"])) {
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';
    header("location: ../profil.php?error=none");
    //$ranc1 = $_SESSION["ranc"];
    /*
    if ($ranc1 === 0) {
        header("location: ../profil.php?error=0");
        exit();
    } else if ($ranc1 === 1) {
        header("location: ../profil.php?error=1");
        exit();
    } else {
        header("location: ../profil.php?error=norole");
        exit();
    }
    */
    /*
    if ($_SESSION["ranc"] === 0) {
        echo "<h2>Buna ziua, ", $username1, "!</h2>";
        exit();
    }else if ($_SESSION["ranc"] === 1) {
            echo "<h2>Buna ziua, ", $username1, ", sunteti logat(a) pe un cont admin!</h2>";
            exit();
          }
    */
}
else {
    header("location: ../login.php");
    exit();
}