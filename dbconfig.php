<?php

try{
    $pdo = new PDO("mysql:host=localhost;dbname=registro_convite", "root", "");
}catch(PDOException $e){
    echo "Error: ".$e->getMessage();
}