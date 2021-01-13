<?php
require_once 'functions.inc.php';
require_once 'dbh.inc.php';
if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $conn->query("DELETE FROM users WHERE usersId=$id");
    if ($id === $_SESSION["userid"]) {
        header("location: logout.inc.php");
        exit();
    } else {
        header("location: profil.inc.php");
        exit();
    }
}

exit();