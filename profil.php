<?php
if(!isset($_SESSION)) { 
    session_start(); 
} 
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
    <h1>Profilul meu</h1>
    <?php
            $username1 = $_SESSION["useruid"];
            $email1 = $_SESSION["email"];
            $id1 = $_SESSION["userid"];
            
            if ($_SESSION["ranc"] !== 1 and $_SESSION["ranc"] !== 0) {
                echo "<h2>Buna, ", $username1, ", a aparut o eroare la recunoasterea contului tau, ne cerem scuze!";
            }
            if ($_SESSION["ranc"] === 0) {
                include "includes/dbh.inc.php";

                echo "<h2>Buna, ", $username1, "!";
                if (isset($_GET["error"])) {
                    if ($_GET["error"] == "noner"){
                        echo "<p>Rezervarea dumneavoastra a fost inregistrata cu succes!</p>";
                    }
                    if ($_GET["error"] == "reservationfailed"){
                        echo "<p>Rezervare esuata, reincercati mai tarziu!</p>";
                    }
                }
                echo '
                <div class="passcha-form">
                    <h1>Schimba numele de utilizator!</h1>
                    <form action="includes/schimba_parola.inc.php" method="post">
                        <input type="text" name="newuid" placeholder="nume nou..">
                        <button type="submit" name="submit">Schimba numele de utilizator</button>
                    </form>';
                    if (isset($_GET["error"])) {
                        if ($_GET["error"] == "emptyinputu") {
                            echo "<p>Completati toate campurile!</p>";
                        }
                        if ($_GET["error"] == "invaliduid") {
                            echo "<p>Nume de utilizator invalid!!</p>";
                        }
                        if ($_GET["error"] == "uidTaken"){
                            echo "<p>Numele de utilizator apartine deja unui alt utilizator!</p>";
                        }  
                        if ($_GET["error"] == "noneu"){
                            echo "<p>Nume de utilizator schimbat cu succes!</p>";
                        }
                        
                    }
                echo '
                </div>
                
                <div class="passcha-form">
                        <h1>Schimba parola!</h1>
                        <form action="includes/schimba_parola.inc.php" method="post">
                            <input type="password" name="pwd" placeholder="parola..">
                            <input type="password" name="newpwd" placeholder="parola noua..">
                            <button type="submit" name="submit">Schimba parola</button>
                        </form>';

                    if (isset($_GET["error"])) {
                        if ($_GET["error"] == "wrongpwd") {
                            echo "<p>Parola este gresita!</p>";
                        }
                        else if ($_GET["error"] == "stmtfailed"){
                            echo "<p>A aparut o eroare, incercati mai tarziu!</p>";
                        }
                        if ($_GET["error"] == "emptyinputp") {
                            echo "<p>Completati toate campurile!</p>";
                        }

                    }
                    echo '
                </div>
                ';
            }
            if ($_SESSION["ranc"] === 1) {
                echo '<h2>Buna, ', $username1, ', esti logat pe un cont admin!';
                                

                include "includes/dbh.inc.php";
                $sql = "SELECT * FROM users";
                $rezultat = mysqli_query($conn, $sql);
                $rezultatCheck = mysqli_num_rows($rezultat);
                
                if ($rezultatCheck > 0) {
                    echo'
                        <div class="row justify-content-ceter">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Nume utilizator</th>
                                        <th>Email</th>
                                        <th colsp="1">Sterge conturi</th>
                                    </tr>
                                </thead>
                        ';
                    
                    while($row = mysqli_fetch_assoc($rezultat)){
                        $id = mysqli_real_escape_string($conn, $row["usersId"]);
                        $nf = mysqli_real_escape_string($conn, $row["usersName"]);
                        $em = mysqli_real_escape_string($conn, $row["usersEmail"]);
                        echo '
                                    <tr>
                                        <td>';echo $id; echo '</td>
                                        <td>';echo $nf; echo '</td>
                                        <td>';echo $em; echo '</td>';
                                        if ($id != $id1) { 
                                            echo '
                                            <td> <a href="includes/sterge_cont.inc.php?delete=';echo $id; echo'" class="btn btn-danger">Sterge contul</a></td>
                                        ';} echo '</tr>';
                    }
                    echo'
                            </table>
                        </div>
                    ';   
                }
            } 
    ?>
    <br>

</body>
<?php
include('views/templates/footer.php'); 
?>

<script type="text/javascript">

</script>