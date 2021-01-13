<?php
//if(!$_SESSION['useruid']) {
    session_start();
//}
if (isset($_POST["rest"])) {
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    $oras = $_SESSION['oras'];
    $hotel = $_SESSION['hotel'];
    $rest = $_SESSION['rest'];
    $userid = $_SESSION['userid'];

    rezervare($conn, $userid, $oras, $hotel, $rest);
    //echo $oras;

}