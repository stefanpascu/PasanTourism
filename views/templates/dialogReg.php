<?php
    //session_start();
?>
<form id="register-form" class="usereg-form" action = "insert.php" method = "post">
    <div class="area">
        <label for="name"><b>Introduceti numele intreg:</b></label>
        <input type="text" placeholder="Ex: Nume Prenume" name="name" value="" required>
    </div>

    <div class="area">
        <label for="pswd"><b>Introduceti parola:</b></label>
        <input type="password" placeholder="Parola" name="pswd" value="" required>
    </div>

    <div class="area">
        <label for="email"><b>Introduceti adresa de email:</b></label>
        <input type="email" placeholder="Ex: email@domeniu.com" name="email" value="" required>
    </div>

    <div class="area">
        <label for="tlfn"><b>Introduceti numarul de telefon:</b></label>
        <input type="tel" placeholder="Ex: 0123-456-789" pattern="[0-9]{4}-[0-9]{3}-[0-9]{3}" name="tlfn" value="" required>
    </div>

    <input type="hidden" name="ranc" value = "0" readonly></input>

    <span class="close" onclick="this.parentElement.style.display = 'none'">X</span>

    <input type = "submit" value = "Register"></button>
</form>

<script type="text/javascript">
    

    
</script>