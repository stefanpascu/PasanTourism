<?php
//session_start();
if(!isset($_SESSION)) { session_start(); }

echo '
<div class="menu">
    <div class="left">
        <div class="dropdown">
            <button class="dropbtn">MENIU</button>
            <div class="dropdown-content">
            ';if(isset($_SESSION['userid'])){
                echo '
                <a href="index.php">ACASA</a>
                <a href="rezervari.php">REZERVARI</a>
                <a href="orase.php">ORASE IN ROMANIA</a>
                <a href="hoteluri.php">HOTELURI</a>
                <a href="pachete_de_calatorie.php">PACHETE DE CALATORIE</a>
                <a href="contact.php">CONTACT</a>
                ';
            } else {
                echo '
                    <a href="index.php">ACASA</a>
                    <a href="orase.php">ORASE IN ROMANIA</a>
                    <a href="hoteluri.php">HOTELURI</a>
                    <a href="contact.php">CONTACT</a>
                ';
            }
            echo '
            </div>
        </div>
    </div>
    
    <div class="right">
';
        if (isset($_SESSION["useruid"])) {
            echo "<a id='logout-button' class='link-button' href='includes/logout.inc.php'>Logout</a>";
            echo "<a id='profile-button' class='link-button' href='includes/profil.inc.php'>Profilul Meu</a>";   
        }
        else {
            echo "<a id='login-button' class='link-button' href='login.php'>Login</a>";
            echo "<a id='register-button' class='link-button' href='signup.php'>Inregistrare cont</a>";
        }
echo '
        </div>

</div>
';