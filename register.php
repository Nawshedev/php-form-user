
<?php


$database= new PDO('mysql:host=localhost;dbname=account;charset=utf8','root','' );


if (isset($_POST["password"]) && isset($_POST["username"])){
    
$password=$_POST["password"];
$username=$_POST["username"];

    if ((!empty($username)) && (!empty($password)) && (strlen("$password")>8))
    {
        $result=$database->query("INSERT INTO user(password, pseudo) VALUE('$password', '$username')");

        echo "Les données ont été transmises";
        
    }
    else{

        echo "Les données n'ont pas pu être transmises";
        
    }

}



?>