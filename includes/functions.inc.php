<?php

function emptyInputSignup($name, $fname, $email, $tlf ,$username, $pwd, $pwdRepeat) {
    if (empty($name) || empty($fname) || empty($email) || empty($tlf) || empty($username) || empty($pwd) || empty($pwdRepeat)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidUid($username) {
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidEmail($email) {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function tlfTest($tlf) {
    if ((!preg_match("/^[0-9]*$/", $tlf)) && strlen($tlf) !== 10) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function pwdMatch($pwd, $pwdRepeat) {
    if ($pwd !== $pwdRepeat) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function uidExists($conn, $username, $email) {
    $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $name, $fname, $email, $tlf ,$username, $pwd) {
    $sql = "INSERT INTO users (usersName, usersFirstName, usersEmail, usersTelefon, usersUid, usersPwd) VALUES (?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssssss", $name, $fname, $email, $tlf ,$username, $hashedPwd);
    mysqli_stmt_execute($stmt);    
    mysqli_stmt_close($stmt);
    header("location: ../signup.php?error=none");
}

function emptyInputLogin($username, $pwd) {
    if (empty($username) || empty($pwd)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function loginUser($conn, $username, $pwd) {
    $uidExists = uidExists($conn, $username, $username);

    if ($uidExists === false) {
        header("location: ../login.php?error=wronglogin");
        exit();
    }
    
    $pwdHashed = $uidExists["usersPwd"];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if($checkPwd === false) {
        header("location: ../login.php?error=wronglogin");
        exit();
    }
    else if ($checkPwd === true) {
        session_start();
        $_SESSION["ranc"] = $uidExists["ranc"];
        $_SESSION["userid"] = $uidExists["usersId"];
        $_SESSION["useruid"] = $uidExists["usersUid"];
        $_SESSION["email"] = $uidExists["usersEmail"];
        header("location: profil.inc.php");
        exit();
    }
}

function schimbaUid($conn, $username, $newuid){
    $sql11 = "SELECT * FROM users WHERE usersUid = '$newuid';";
    $result = mysqli_query($conn, $sql11);
    $resultCheck = mysqli_num_rows($result);
	if($resultCheck > 0){
        header("location: ../profil.php?error=uidTaken");
        exit();
    }
    else{
        $sql = "UPDATE users SET usersUid = '$newuid' WHERE usersUid = '$username';";
        if (mysqli_query($conn, $sql)) {
            $_SESSION['useruid'] = $newuid;
            header("location: ../profil.php?error=noneu");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }    
}

function schimbaParola($conn, $username, $pwd, $newPwd) {

    $sql = "SELECT * FROM users WHERE usersUid = '$username';";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
		if($resultCheck > 0){
			while ($row = mysqli_fetch_assoc($result)) {
				$oldPwd = $row['usersPwd'];
			}
        }
    if(password_verify($pwd, $oldPwd) == true){
        $newPwdHash = password_hash($newPwd, PASSWORD_DEFAULT);
        $sql1 = "UPDATE users SET usersPwd = '$newPwdHash' WHERE usersUid = '$username';";
        if (mysqli_query($conn, $sql1)) {
            header("location: ../profil.php?error=none&password=changed");
            exit();
          } else {
            echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
          }
    }
    
}

function deleteUser($conn, $id) {
    $sql = "DELETE * FROM users WHERE usersId=$id;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    if ($id === $_SESSION["usersId"]) {
        header("location: logout.inc.php");
        exit();
    }
    exit();
}

function rezervare($conn, $userid, $oras, $hotel, $rest) {
    // $sql = "INSERT INTO rezervari (usersId, oras, hotel, restaurant) VALUES ($userid, $oras, $hotel, $rest);";
    // mysqli_query($conn, $sql);
    // //$resultCheck = mysqli_num_rows($result);
    // header("location: ../profil.php");
    // $sql = "INSERT INTO rezervari (usersId, oras, hotel, restaurant) VALUES (?, ?, ?, ?);";
    // $stmt = mysqli_stmt_init($conn);
    // if (!mysqli_stmt_prepare($stmt, $sql)) {
    //     header("location: ../profil.php?error=reservationfailed");
    //     exit();
    // }

    // mysqli_stmt_bind_param($stmt, "ssss", $userid, $oras, $hotel, $rest);
    // mysqli_stmt_execute($stmt);    
    // mysqli_stmt_close($stmt);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
        
    $sql = "INSERT INTO rezervari (usersId, oras, hotel, restaurant)
    VALUES ('$userid', '$oras', '$hotel', '$rest')";
        
    if ($conn->query($sql) === TRUE) {
      //echo "New record created successfully";
      header("location: ../profil.php?error=noner");
    } else {
      //echo "Error: " . $sql . "<br>" . $conn->error;
      header("location: ../profil.php?error=reservationfailed");
    }
        
    $conn->close();
        
    //header("location: ../profil.php");
    //header("location: ../profil.php");
}