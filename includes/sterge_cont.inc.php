<?php
require_once 'functions.inc.php';
require_once 'dbh.inc.php';
deleteUser($conn, $_SESSION['userid']);
header("location: logout.inc.php");
exit();