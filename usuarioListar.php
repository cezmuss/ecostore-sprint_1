<?php

    /* Conexão usando OOP do PHP */
    $conn = new mysqli("localhost", "root", "", "EcoStore");

    /* Checa conexão */
    if ($conn->connect_error) {
        die("Conexão Falhou: " . $conn->connect_error);
    }

    

?>