<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "blog";

try {
    $myPDO = new PDO("mysql:host=$server_name; dbname=$db_name; charset=utf8; port=3306" . $password, $username);
    $myPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //  echo "Connexion réussie";
} catch (PDOException $e) {
    echo "Erreur :" . $e->getMessage();
}
