<?php
  require 'connDB.php';

  /* Array que puxa os dados do form */
  $login    = $_REQUEST['login'];
  $senha    = $_REQUEST['senha'];
  $nome     = $_REQUEST['nome'];
  $cpf      = $_REQUEST['cpf'];
  $telefone = $_REQUEST['telefone'];

  $sqlquery = "BEGIN;
      INSERT INTO Usuario (LoginS,Senha,Nome,Cpf) 
        VALUES ('$login','$senha','$nome','$cpf');
      INSERT INTO Telefone (CodUsu, NumTel)
        VALUES (LAST_INSERT_ID(), '$telefone');
      COMMIT;";

  if ($conn->multi_query($sqlquery) === TRUE) {
    echo "Sucesso!";
  } else {
    echo "Erro: " . $sqlquery . $conn->error;
  }

  $conn->close();
?>