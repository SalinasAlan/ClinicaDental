<?php

    $servidor = "localhost";
    $usuario = "root";
    $pass = "";
    $db = "dental";

    $conn = new mysqli($servidor, $usuario, $pass, $db);    
    
    
    if ($conn) {
        // echo 'connected';
    }else{
        die("Connection failed: ".mysqli_connect_error());
    }
?>