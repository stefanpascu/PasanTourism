<!DOCTYPE html>

<head>
    <link href="public/styles/mystyle.css" rel="stylesheet">
    <script src="public/js/myscript.js"></script>
    <?php include('views/templates/head.php'); ?>
    <?php include('views/templates/dropdown.php'); ?>
</head>


<body>
    
    <section class="usereg-form">
        <h1>Inregistrare</h1>
        <form action="includes/signup.inc.php" method="post">
            <input type="text" name="name" placeholder="Nume..">
            <input type="text" name="firstName" placeholder="Prenume..">
            <input type="text" name="email" placeholder="Email..">
            <input type="text" name="tlf" placeholder="Numar de Telefon..">
            <input type="text" name="uid" placeholder="Nume utilizator..">
            <input type="password" name="pwd" placeholder="Parola..">
            <input type="password" name="pwdRepeat" placeholder="Repetare parola..">
            <button type="submit" name="submit">Inregistreaza-ma</button>
        </form>
        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                echo "<p>Completati toate campurile!</p>";
            }
            else if ($_GET["error"] == "invaliduid"){
                echo "<p>In numele de utilizator ales apar caractere invalide!</p>";
            }
            else if ($_GET["error"] == "invalidemail") {
                echo "<p>Email-ul ales este invalid!</p>";
            }
            else if ($_GET["error"] == "invalidphonenumber"){
                echo "<p>Numarul de telefon ales este invalid!</p>";
            }
            else if ($_GET["error"] == "passwordsdontmatch"){
                echo "<p>Parolele introduse difera!</p>";
            }
            else if ($_GET["error"] == "usernametaken"){
                echo "<p>Numele de utilizator este deja folosit!</p>";
            }
            else if ($_GET["error"] == "stmtfailed"){
                echo "<p>Ceva nu a mers bine, mai incercati o data!</p>";
            }
            else if ($_GET["error"] == "none"){
                echo "<p>Ati fost inregistrat(a) cu succes!</p>";
            }
        }
        ?>
    </section>

    <script src="myscriptHomePage.js"></script>
    <?php include('views/templates/footer.php'); ?>
</body>