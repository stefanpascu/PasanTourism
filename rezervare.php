<!DOCTYPE html>

<head>
    <link href="public/styles/mystyle.css" rel="stylesheet">
    <script src="public/js/myscript.js"></script>
    <?php include('views/templates/head.php'); ?>
    <?php include('views/templates/dropdown.php'); ?>
</head>

<body>
    <h1>Finalizati rezervarea</h1>

    <?php
    if(!isset($_SESSION)) {
        session_start();
    }
    if(!isset($_SESSION['userid'])) {   header("location: login.php");   }
    
    if (isset($_POST["1321"])) {
        //cluj, art, roata
        $oras = 'Cluj';
        $hotel = 'Art 1000';
        $rest = 'Roata';
        //echo '1321';
    }
    if (isset($_POST["1322"])) {
        //cluj, art, boema
        $oras = 'Cluj';
        $hotel = 'Art 1000';
        $rest = 'Restaurant Boema';
        //echo '1322';
    }

    if (isset($_POST["1311"])) {
        //cluj, platinia, roata
        $oras = 'Cluj';
        $hotel = 'Platinia';
        $rest = 'Roata';
        //echo '1311';
    }
    if (isset($_POST["1312"])) {
        //cluj, platinia, boema
        $oras = 'Cluj';
        $hotel = 'Platinia';
        $rest = 'Boema';
        //echo '1312';
    }


    if (isset($_POST["1221"])) {
        //constanta, roberto, toscana
        $oras = 'Constanta';
        $hotel = 'Roberto';
        $rest = 'Toscana';
        //echo '1221';
    }
    if (isset($_POST["1222"])) {
        //constanta, roberto, taverna
        $oras = 'Constanta';
        $hotel = 'Roberto';
        $rest = 'Nikos Greek Tavern';
        //echo '1222';
    }

    if (isset($_POST["1211"])) {
        //constanta, ramada, toscana
        $oras = 'Constanta';
        $hotel = 'Ramada By Wyndham';
        $rest = 'Toscana';
        //echo '1211';
    }
    if (isset($_POST["1212"])) {
        //constanta, ramada , taverna
        $oras = 'Constanta';
        $hotel = 'Ramada By Wyndham';
        $rest = 'Nikos Greek Tavern';
        //echo '1212';
    }


    if (isset($_POST["1111"])) {
        //sinaia, noe, forest
        $oras = 'Sinaia';
        $hotel = 'Arca lui Noe';
        $rest = 'Forest';
        //echo '1221';
    }
    if (isset($_POST["1112"])) {
        //sinaia, noe, wood
        $oras = 'Sinaia';
        $hotel = 'Arca lui Noe';
        $rest = 'Wood';
        //echo '1222';
    }

    if (isset($_POST["1121"])) {
        //sinaia, bulevard, forest
        $oras = 'Sinaia';
        $hotel = 'Bulevard';
        $rest = 'Forest';
        //echo '1211';
    }
    if (isset($_POST["1122"])) {
        //sinaia,  bulevard, wood
        $oras = 'Sinaia';
        $hotel = 'Bulevard';
        $rest = 'Wood';
        //echo '1212';
    }
    $_SESSION['oras'] = $oras;
    $_SESSION['hotel'] = $hotel;
    $_SESSION['rest'] = $rest;
    ?>
    <br>
    <?php
    //echo $_SESSION['oras'];
    echo '
    <h2>Pachetul contine un concediu in orasul '; echo $oras; echo ', petrecut la hotelul '; echo $hotel; echo ', 
    cu toate mesele la restaurantul ';echo $rest; echo '.</h2>';
    echo '
                <div class="">  
                    <form action="includes/rezerva.inc.php" method="post">
                        <input type="hidden" name="rest">
                        <button class="button1" type="submit" name="submit">Rezerva</button>
                    </form>
                </div>
        ';
    ?>
    
    <script src="myscriptHomePage.js"></script>
    <?php include('views/templates/footer.php'); ?>
</body>