<?php
//session_start();
if(!isset($_SESSION)) { session_start(); }
?>

<div class="menu">
    <div class="left">
        <div class="dropdown">
            <button class="dropbtn">MENIU</button>
            <div class="dropdown-content">
                <a href="index.php">ACASA</a>
                <a href="pachete_calatorie.php">PACHETE DE CALATORIE</a>
                <a href="orase.php">ORASE IN ROMANIA</a>
                <a href="hoteluri.php">HOTELURI</a>
                <a href="favorite.php">FAVORITE</a>
                <a href="rezervari.php">REZERVARI</a>
                <a href="contact.php">CONTACT</a>
            </div>
        </div>
    </div>
    
    <div class="right">
    <?php
        if (isset($_SESSION["useruid"])) {
            echo "<a id='logout-button' class='link-button' href='includes/logout.inc.php'>Logout</a>";
            echo "<a id='profile-button' class='link-button' href='includes/profil.inc.php'>Profilul Meu</a>";   
        }
        else {
            echo "<a id='login-button' class='link-button' href='login.php'>Login</a>";
            echo "<a id='register-button' class='link-button' href='signup.php'>Inregistrare cont</a>";
        }
        ?>
        </div>

</div>