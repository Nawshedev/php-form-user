
<?php


$database= new PDO('mysql:host=localhost;dbname=account;charset=utf8','root','', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));


if (isset($_POST["password"]) && isset($_POST["pseudo"])){
    
$password=$_POST["password"];
$pseudo=$_POST["pseudo"];

    if ((!empty($pseudo)) && (!empty($password)) && (strlen("$password")>8) && (preg_match('#^(?=.*[A-Z])#', $password)))
    {

        echo "Les données ont été transmises";
        $result=$database->query("INSERT INTO user(password, pseudo) VALUE('$password', '$pseudo')");
        
    }
    else{

        echo "données non transmises";
       
        
    }

}



?>