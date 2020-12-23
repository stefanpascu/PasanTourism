<?php
    session_start();

    $con = mysqli_connect('127.0.0.1', 'root', '');

    if(!$con) {
        echo 'Not Connected To Server';
    }
    if(!mysqli_select_db($con, 'ptdb')) {
        echo 'Database Not Selected';
    }
    $prl = $_POST['pswd'];
    
    $nume = " SELECT NUME FROM user WHERE EMAIL = '$email' AND PAROLA = '$prl'";
    if(isset($_POST['email'])) {
        $email = $_POST['email'];
        $_SESSION['email'] = $email;
    }
    $url = "profil.php";


    $s = " SELECT * FROM user WHERE EMAIL = '$email' AND PAROLA = '$prl'";
    $result = mysqli_query($con, $s);
    $num = mysqli_num_rows($result);

    if($num == 1) {
        $pers = "SELECT * FROM user WHERE EMAIL = '$email'";
        $_SESSION['pers'] = $pers;
        header('location:' . $url);
    }
    else {
        echo"Parola/Email incorect(a) !";
        //header("refresh:4; url=index.php");
        header('location:index.php');
    }
    
?>
<script type="text/javascript">
    

</script>