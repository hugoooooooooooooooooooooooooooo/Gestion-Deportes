<?php
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'ges_deportes';

    try{
        $con = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
    } catch(PDOException $e){
        die( "Connection failed: " . $e->getMessage());
    }
?>