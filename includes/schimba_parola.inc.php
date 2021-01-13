<?php
if(!isset($_SESSION["useruid"])) { 
    session_start(); 
} 
if (isset($_POST["newuid"])) {
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';
    $newuid = $_POST["newuid"];
    if ($newuid == ''){
        header("location: ../profil.php?error=emptyinputu");
        exit();
    }
    if (invalidUid($newuid) !== false) {
        header("location: ../profil.php?error=invaliduid");
        exit();
    }
    
    schimbaUid($conn, $_SESSION['useruid'], $newuid);

}
else if (isset($_POST["newpwd"])) {
    $pwd = $_POST['pwd'];
    $newpwd = $_POST["newpwd"];
    if ($newpwd == '' || $pwd == ''){
        header("location: ../profil.php?error=emptyinputp");
        exit();
    }

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';
    
    schimbaParola($conn, $_SESSION['useruid'], $pwd, $newpwd);

}
else {
    header("location: ../profil.php?wrongcontent");
    exit();
}