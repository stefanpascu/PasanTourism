<?php
if(!isset($_SESSION["useruid"])) { 
    session_start(); 
} 
?>

<!DOCTYPE html>

<head>
    <link href="public/styles/mystyle.css" rel="stylesheet">
    <script src="public/js/myscript.js"></script>
    <?php include('views/templates/head.php'); ?>
    <?php include('views/templates/dropdown.php'); ?>
</head>


<body>
    <h1>Profilul meu</h1>
    <?php
    if (isset($_GET["error"])) {
        $username1 = $_SESSION["useruid"];
        if ($_SESSION["ranc"] === 0) {
            echo "<h2>Buna, ", $username1, "!";
        }
        if ($_SESSION["ranc"] === 1) {
            echo "<h2>Buna, ", $username1, ", esti logat pe un cont admin!";
        } 
        if ($_SESSION["ranc"] !== 1 and $_SESSION["ranc"] !== 0) {
            echo "<h2>Buna, ", $username1, ", e ciudat, dar nu esti autentificat..";
        }
        
    }


    //echo "<a id='sterge_cont-button' class='link-button' href='includes/sterge_cont.inc.php'>Sterge Contul</a>";
    ?>
    <br>


    
</body>
<?php
include('views/templates/footer.php'); 
?>

<script type="text/javascript">

</script>