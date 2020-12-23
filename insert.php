<?php
    session_start();
    $con = mysqli_connect('127.0.0.1', 'root', '');
    mysqli_select_db($con, 'ptdb');
    
    $nume = $_POST['name'];
    $prl = $_POST['pswd'];
    $email = $_POST['email'];
    $tlfn = $_POST['tlfn'];
    $ranc = $_POST['ranc'];

    $s = " SELECT * FROM user WHERE EMAIL = '$email'";
    $result = mysqli_query($con, $s);
    $num = mysqli_num_rows($result);

    if($num == 1) {
        echo"Email-ull este deja inregistrat !";
        header("refresh:5; url=index.php");
    }
    else {
        $sql = "INSERT INTO user(EMAIL, NUME, PAROLA, TELEFON, RANC) VALUES('$email', '$nume', '$prl', '$tlfn', '$ranc')";
        mysqli_query($con, $sql);
        echo "Cont Inregistrat cu Succes!";
    }
    
    header("refresh:0;url=index.php");
    
?>