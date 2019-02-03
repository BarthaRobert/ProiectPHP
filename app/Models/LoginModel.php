<?php
session_start();
require_once("../Controllers/dbconnect.php");

//  verifica daca exista date transmise
if ($_POST['login_username'] != "" && $_POST['login_password'] != '') {

    // preia datele din formular
    function loginUser(PDO $pdo , $username,$password){
        $stmt=$pdo->prepare("select * from users where username =?");
        $stmt->execute([$username]);
        //formateaza rezultatele primite
        $result=$stmt->fetch();
        if($result!=null) {
            if (password_verify($password, $result["login_password"])) {
                return true;

            }
        }
        return false;
    }
    $username = $_POST["login_username"];
    $password = $_POST["login_password"];


    if(loginUser($pdo, $username,$password))
    {
        echo "Welcome!";
        $_SESSION["login_username"]=$result["login_username"];

    }
    else
    {
        echo "Invalid";
    }


}
