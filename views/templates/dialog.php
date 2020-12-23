<?php
    session_start();
?>

<form id="login-form" class="user-form" action="validation.php" method="post">
    <div class="area">
        <label for="email"><b>Email:</b></label>
        <input type="text" placeholder="email" name="email" value="" required>
    </div>

    <div class="area">
        <label for="pswd"><b>Password</b></label>
        <input type="password" placeholder="Password" name="pswd" value="" required>
    </div>

    <span class="close" onclick="this.parentElement.style.display = 'none'">X</span>

    <input type="submit" value="Login"></button>
</form>


<script type="text/javascript">
    function Logged() {
        document.getElementById("login-button").style.display = "none";
        document.getElementById("register-button").style.display = "none";
        document.getElementById("logout-button").style.display = "inline-block";
        document.getElementById("profile-button").style.display = "inline-block";
    }

    function logout() {
        document.getElementById("register-button").style.display = "inline-block";
        document.getElementById("login-button").style.display = "inline-block";
        document.getElementById("logout-button").style.display = "none";
        document.getElementById("profile-button").style.display = "none";
        destroy_session();
    }

    function showDialog(page) {
        const loginForm = document.getElementById(page);
        loginForm.style.display = "block";
    }

    function destroy_session(){
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open('GET','views/templates/destroy_session.php', true);
        xmlhttp.onreadystatechange=function(){
            if (xmlhttp.readyState == 4){
                if(xmlhttp.status == 200){
                    //alert(xmlhttp.responseText);
                }
            }
        };
        xmlhttp.send(null);
    }
</script>

<?php

if (isset($_SESSION['pers'])) {
    echo "<script type='text/javascript'> (function(){ Logged(); })(); </script>";
}

?>