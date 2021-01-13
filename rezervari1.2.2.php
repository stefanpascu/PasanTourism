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
    <h1>Rezervari</h1>
    
    <div class="flex-container"><div>
        <h2>
        Alege un restaurant pe placul tau!
        </h2>
    </div></div>
    <form class="flex-container" method="post" action="rezervare.php">
        
        <div>
            <img src="public/images/toscana1.jpg" alt="This image could not load." style="max-width:100%;height:auto;" />

            
        </div>

        <div>
            <img src="public/images/nikos1.jpg" alt="This image could not load." style="max-width:100%;height:auto;" />
            

        </div>

    </form>

    <form class="flex-container" method="post" action="rezervare.php">
        <div>
            <?php
                echo "<button id='logout-button' class='link-button' type='submit' class='link-button' name='1221'>RESTAURANT TOSCANA</button>";
            ?>
            <br><br>    
        </div>
            
        <div>
            <?php
                echo "<button id='logout-button' class='link-button' type='submit' class='link-button' name='1222'>NIKOS GREEK TAVERNA</button>";
            ?>
            <br><br>  
        </div>

    </form>

    <br>

    <script src="myscriptHomePage.js"></script>
    <?php include('views/templates/footer.php'); ?>
</body>