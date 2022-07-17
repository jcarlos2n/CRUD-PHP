<?php
    $server = "db";
    $user = 'root';
    $password = 'root';
    $databaseName = 'fsd_crud_php';
  
    try {
        $connection = new PDO("mysql:host=$server;dbname=$databaseName", $user, $password);        
    } catch (\Exception $exception) {
        echo 'Error Exception: ' . $exception->getMessage();
    }
?>