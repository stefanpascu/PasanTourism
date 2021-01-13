<?php
    if(!isset($_SESSION)){ session_start(); }
    if(!isset($_SESSION['userid'])) {   header("location: login.php");   }
?>
<!DOCTYPE html>

<head>
    <link href="public/styles/mystyle.css" rel="stylesheet">
    <script src="public/js/myscript.js"></script>
    <?php include('views/templates/head.php'); ?>
    <?php include('views/templates/dropdown.php'); ?>
</head>


<body>
    <h1>Pachete de Calatorie</h1>
    
    <div class="flex-container"><div>
        <h2>
        Alege orasul in care doresti sa iti petreci vacanta!
        </h2>
    </div></div>
    <div class="flex-container">
        
        <div>
            <img src="public/images/sinaia.jpg" alt="This image could not load."
            style="max-width:100%;height:auto;" />

            
        </div>

        <div>
            <img src="public/images/plaja.jpg" alt="This image could not load."
            style="max-width:100%;height:auto;" />
            

        </div>

        <div>
            <img src="public/images/cluj.jpg" alt="This image could not load."
            style="max-width:100%;height:auto;" />
            

        </div>

    </div>

    <div class="flex-container">
        <div>
            <?php
                echo "<a id='logout-button' class='link-button' href='rezervari1.1.php'>SINAIA</a>";
            ?>
            <br><br>    
        </div>
            
        <div>
            <?php
                echo "<a id='logout-button' class='link-button' href='rezervari1.2.php'>CONSTANTA</a>";
            ?>
            <br><br>  
        </div>

        <div>
            <?php
                echo "<a id='logout-button' class='link-button' href='rezervari1.3.php'>CLUJ</a>";
            ?>
            <br><br>  
        </div>
    </div>

    <br>

    <script src="myscriptHomePage.js"></script>
    <?php include('views/templates/footer.php'); ?>
</body>