<?php 

$database= new PDO('mysql:host=localhost;dbname=account;charset=utf8','root','', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
$query="SELECT pseudo FROM user WHERE pseudo = name";

if (isset($_POST["password"]) && isset($_POST["pseudo"])){
    
    $password=$_POST["password"];
    $pseudo=$_POST["pseudo"];

    if(empty($pseudo)){
        header("Location:login.php?error=Merci d'indiquer votre pseudo");
    }
    else if( empty($password)){
        header("Location:login.php?error=Merci d'indiquer votre mot de passe");
    }
    else{


    }

    
    }
else{
    echo erreur;
}    
    