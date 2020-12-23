<?php

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $fname = $_POST["firstName"];
    $email = $_POST["email"];
    $tlf = $_POST["tlf"];
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdRepeat"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

        if (emptyInputSignup($name, $fname, $email, $tlf ,$username, $pwd, $pwdRepeat) !== false) {
            header("location: ../signup.php?error=emptyinput");
            exit();
        }
    if (invalidUid($username) !== false) {
        header("location: ../signup.php?error=invaliduid");
        exit();
    }
    if (invalidEmail($email) !== false) {
        header("location: ../signup.php?error=invalidemail");
        exit();
    }
    if (tlfTest($tlf) !== false) {
        header("location: ../signup.php?error=invalidphonenumber");
        exit();
    }
    if (pwdMatch($pwd, $pwdRepeat) !== false) {
        header("location: ../signup.php?error=passwordsdontmatch");
        exit();
    }
    if (uidExists($conn, $username, $email) !== false) {
        header("location: ../signup.php?error=usernametaken");
        exit();
    }
        
    createUser($conn, $name, $fname, $email, $tlf, $username, $pwd);

}
else {
    header("location: ../signup.php");
    exit();
}