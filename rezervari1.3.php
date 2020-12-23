<!DOCTYPE html>

<head>
    <link href="public/styles/mystyle.css" rel="stylesheet">
    <script src="public/js/myscript.js"></script>
    <?php include('views/templates/head.php'); ?>
    <?php include('views/templates/dropdown.php'); ?>
</head>


<body>
    <br>    
    <div class="flex-container"><div>
        <h2>
        Alege hotelul in care doresti sa iti petreci vacanta!
        </h2>
    </div></div>
    <div class="flex-container">
        
        <div>
            <img src="public/images/sinaia.jpg" alt="This image could not load."
            style="max-width:100%;height:auto;" />
            <br><br>
            
        </div>

        <div>
            <img src="public/images/plaja.jpg" alt="This image could not load."
            style="max-width:100%;height:auto;" />
            <br><br>

        </div>

    </div>

    <div class="flex-container">
        <div>
            <?php
                echo "<a id='logout-button' class='link-button' href='rezervari1.3.1.php'>HOTEL PLATINIA</a>";
            ?>
            <br><br>    
        </div>
            
        <div>
            <?php
                echo "<a id='logout-button' class='link-button' href='rezervari1.3.2.php'>HOTEL ART 1000</a>";
            ?>
            <br><br>  
        </div>

    </div>

    <br>

    <script src="myscriptHomePage.js"></script>
    <?php include('views/templates/footer.php'); ?>
</body>