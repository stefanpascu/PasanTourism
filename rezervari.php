<!DOCTYPE html>

<head>
    <link href="public/styles/mystyle.css" rel="stylesheet">
    <script src="public/js/myscript.js"></script>
    <?php include('views/templates/head.php'); ?>
    <?php include('views/templates/dropdown.php'); ?>
</head>


<body>
    <h1>Rzervarile facute de tine</h1>
    <?php
    if(!isset($_SESSION['userid'])) {   header("location: login.php");   }
    include "includes/dbh.inc.php";
    if(!isset($_SESSION["useruid"])) { 
        session_start(); 
    } 
    $userId = $_SESSION['userid'];
    if($_SESSION['ranc'] == 0) {
        $sql = "SELECT * FROM rezervari WHERE usersId = $userId;";
        $rezultat = mysqli_query($conn, $sql);
        $rezultatCheck = mysqli_num_rows($rezultat);
        
        if ($rezultatCheck > 0) {
            echo'
                <div class="row justify-content-ceter">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Oras</th>
                                <th>Hotel</th>
                                <th>Restaurant</th>
                            </tr>
                        </thead>
                                ';
                            
                        while($row = mysqli_fetch_assoc($rezultat)){
                            $oras = mysqli_real_escape_string($conn, $row["oras"]);
                            $hotel = mysqli_real_escape_string($conn, $row["hotel"]);
                            $rest = mysqli_real_escape_string($conn, $row["restaurant"]);
                            echo '
                            <tr>
                                <td>';echo $oras; echo '</td>
                                <td>';echo $hotel; echo '</td>
                                <td>';echo $rest; echo '</td>
                            </tr>';
                        }
                echo'
                    </table>
                </div>
                ';
        }  
    } else if($_SESSION['ranc'] == 1) {
        $sql = "SELECT * FROM rezervari;";
        $rezultat = mysqli_query($conn, $sql);
        $rezultatCheck = mysqli_num_rows($rezultat);
        
        if ($rezultatCheck > 0) {
            echo'
                <div class="row justify-content-ceter">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Id-ul utilizatorului</th>
                                <th>Oras</th>
                                <th>Hotel</th>
                                <th>Restaurant</th>
                            </tr>
                        </thead>
                                ';
                            
                        while($row = mysqli_fetch_assoc($rezultat)){
                            $id = mysqli_real_escape_string($conn, $row["usersId"]);
                            $oras = mysqli_real_escape_string($conn, $row["oras"]);
                            $hotel = mysqli_real_escape_string($conn, $row["hotel"]);
                            $rest = mysqli_real_escape_string($conn, $row["restaurant"]);
                            echo '
                            <tr>
                                <td>';echo $id; echo '</td>
                                <td>';echo $oras; echo '</td>
                                <td>';echo $hotel; echo '</td>
                                <td>';echo $rest; echo '</td>
                            </tr>';
                        }
                echo'
                    </table>
                </div>
                ';
        }  
    }
                
    ?> 

    <br>

    <script src="myscriptHomePage.js"></script>
    <?php include('views/templates/footer.php'); ?>
</body>