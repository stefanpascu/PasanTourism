<!DOCTYPE html>

<head>
    <link href="public/styles/mystyle.css" rel="stylesheet">
    <script src="public/js/myscript.js"></script>
    <?php include('views/templates/head.php'); ?>
    <?php include('views/templates/dropdown.php'); ?>
</head>


<body>
    <img class="image1" src="public/images/lfundal.jpg" alt="This image could not load."
            style="max-width:100%;height:auto;" />
    
    <section class="user-form">
        <h1>Log In</h1>
        
        <form action="includes/login.inc.php" method="post">
            <input type="text" name="uid" placeholder="Nume de utilizator/Email.." autocomplete = "none">
            <input type="password" name="pwd" placeholder="Parola.." autocomplete = "none">
            <button type="submit" name="submit">Log In</button>
        </form>
        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                echo "<p>Completati toate campurile!</p>";
            }
            else if ($_GET["error"] == "wronglogin"){
                echo "<p>Nume de utilizator/Email sau parola incorect(a)!</p>";
            }
    
        }
        ?>
    </section>

    <script src="myscriptHomePage.js"></script>
    <?php include('views/templates/footer.php'); ?>
</body>