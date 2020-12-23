<?php
session_start();
?>

<div class="menu">
    <div class="left">
        <div class="dropdown">
            <button class="dropbtn">Menu</button>
            <div class="dropdown-content">
                <a href="index.php">Home</a>
                <a href="pachete_calatorie.php">Pachete de calatorie</a>
                <a href="orase.php">Orase in Romania</a>
                <a href="hoteluri.php">Hoteluri</a>
                <a href="sporturi.php">Sporturi</a>
                <a href="favorite.php">Favourites</a>
                <a href="rezervari.php">Reservations</a>
                <a href="contact.php">Contact</a>
            </div>
        </div>
    </div>
    
    <div class="right">
    <?php
        if (isset($_SESSION["useruid"])) {
            echo "<a id='logout-button' class='link-button' href='includes/logout.inc.php'>Logout</a>";
            echo "<a id='profile-button' class='link-button' href='profil.php'>Profilul Meu</a>";   
        }
        else {
            echo "<a id='login-button' class='link-button' href='login.php'>Login</a>";
            echo "<a id='register-button' class='link-button' href='signup.php'>Inregistrare cont</a>";
        }
        ?>
        </div>

</div>