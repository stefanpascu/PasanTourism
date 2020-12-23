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
            <img src="public/images/sinaia.jpg" alt="This image could not load."
            style="max-width:100%;height:auto;" />

            
        </div>

        <div>
            <img src="public/images/plaja.jpg" alt="This image could not load."
            style="max-width:100%;height:auto;" />
            

        </div>

    </div>

    <div class="flex-container">
        <div>
            <?php
                echo "<a id='logout-button' class='link-button' href='rezervari1.2.1.php'>HOTEL </a>";
            ?>
            <br><br>    
        </div>
            
        <div>
            <?php
                echo "<a id='logout-button' class='link-button' href='rezervari1.2.2.php'>HOTEL </a>";
            ?>
            <br><br>  
        </div>

    </div>

    <br>

    <script src="myscriptHomePage.js"></script>
    <?php include('views/templates/footer.php'); ?>
</body>