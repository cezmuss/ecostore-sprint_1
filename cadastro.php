<html>
  <?php require 'cadastro.html';?>
  <?php

  $login    = $_POST['logins'];
  $senha    = MD5($_POST['senha']);
  $nome     = $_POST['nome'];
  $cpf      = $_POST['cpf'];
  $telefone = $_POST['telefone'];

  $connect = mysqli_connect('localhost','root','','EcoStore');
  $query_select = "SELECT login FROM usuario WHERE login = '$login'";
  $select = mysqli_query($query_select,$connect);
  $array = mysqli_fetch_array($select);
  /*$logarray = $array['login'];*/

    
  $insert = "INSERT INTO Usuario (LoginS,Senha,Nome,Cpf,Telefone) VALUES ('$login','$senha','$nome','$cpf','$telefone')";
  if ($res = mysqli_query($connect,$insert)){
    echo"Successo!";
  }else{
    echo "Erro: " . mysqli_error($connect);
  }

  /*if($login == "" || $login == null){
      echo"<script language='javascript' type='text/javascript'>
      alert('O campo login deve ser preenchido');window.location.href='
      cadastro.html';</script>";}
    
  if($senha == "" || $senha == null){
  echo"<script language='javascript' type='text/javascript'>
  alert('O campo senha deve ser preenchido');window.location.href='
  cadastro.html';</script>";}

  if($nome == "" || $nome == null){
  echo"<script language='javascript' type='text/javascript'>
  alert('O campo nome deve ser preenchido');window.location.href='
  cadastro.html';</script>";}

  if($cpf == "" || $cpf == null){
  echo"<script language='javascript' type='text/javascript'>
  alert('O campo cpf deve ser preenchido');window.location.href='
  cadastro.html';</script>";}
      
  if($telefone == "" || $telefone == null){
        echo"<script language='javascript' type='text/javascript'>
        alert('O campo telefone deve ser preenchido');window.location.href='
        cadastro.html';</script>";

      }else{
        if($logarray == $login){

          echo"<script language='javascript' type='text/javascript'>
          alert('Esse login já existe');window.location.href='
          cadastro.html';</script>";
          die();

        }else{
          $query = "INSERT INTO usuario (login,senha,nome,cpf,telefone) VALUES ('$login','$senha','$nome','$cpf','$telefone')";
          $insert = mysqli_query($connect,$query);

          if($insert){
            echo"<script language='javascript' type='text/javascript'>
            alert('Usuário cadastrado com sucesso!');window.location.
            href='login.html'</script>";
          }else{
            echo"<script language='javascript' type='text/javascript'>
            alert('Não foi possível cadastrar esse usuário');window.location
            .href='cadastro.html'</script>";
          }
        }
      }*/
  ?>
</html>