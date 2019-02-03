<?php
//var_dump($_POST);
require_once "../Controllers/dbconnect.php";


if(isset($_POST["register_name"]) && empty($_POST["register_name"]) ||
    isset($_POST["register_password"]) && empty($_POST["register_password"]))
{
    echo "Completati campurile EMAIL si PASSWORD";
}
if(strlen($_POST["register_password"])<6)
{
    echo "Parola trebuie sa aiba lungimea minima de 6 caractere";
}

function registerUser(PDO $pdo, $username, $password):int {
    try{
        $hashPass = password_hash($password,PASSWORD_DEFAULT);
        $stmt = $pdo->prepare("INSERT INTO `users`( `Username`, `Password`) VALUES (?,?)");
        $stmt->execute([$username, $hashPass]);
        return $pdo->lastInsertId();
    } catch(Exception $e){
        echo 'Caught exception: ',  $e->getMessage(), "\n";
    }
}
registerUser($pdo,$_POST["register_username"],$_POST["register_password"]);
