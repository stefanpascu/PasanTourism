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
    <div class="flex-container">
        
        <div>
            <img src="public/images/resforest1.jpg" alt="This image could not load."
            style="max-width:100%;height:auto;" />

            
        </div>

        <div>
            <img src="public/images/reswood1.jpg" alt="This image could not load."
            style="max-width:100%;height:auto;" />
            

        </div>

    </div>

    <form class="flex-container" method="post" action="rezervare.php">        
        <div>
            <?php
                echo "<button id='logout-button' class='link-button' type='submit' class='link-button' name='1111'>RESTAURANT FOREST</button>";
            ?>
            <br><br>    
        </div>
            
        <div>
            <?php
                echo "<button id='logout-button' class='link-button' type='submit' class='link-button' name='1112'>RESTAURANT WOOD</button>";
            ?>
            <br><br>  
        </div>

    </form>

    <br>

    <script src="myscriptHomePage.js"></script>
    <?php include('views/templates/footer.php'); ?>
</body>