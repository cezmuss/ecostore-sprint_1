<html>

<body>


  <?php

  $conn = mysqli_connect("127.0.0.1","root","","EcoStore");

  $login    = mysqli_real_escape_string($conn, $_REQUEST['login']);
  $senha    = mysqli_real_escape_string($conn, $_REQUEST['senha']);
  $nome     = mysqli_real_escape_string($conn, $_REQUEST['nome']);
  $cpf      = mysqli_real_escape_string($conn, $_REQUEST['cpf']);
  $telefone = mysqli_real_escape_string($conn, $_REQUEST['telefone']);

  
  /*$query_select = "SELECT login FROM usuario WHERE login = '$login'";
  $select = mysqli_query( $connect, $query_select);
  $array = mysqli_fetch_array($select);
  $logarray = $array['login'];*/


  if ($conn == false) {
    die("Conexão Falhou: " . mysqli_connect_error());
  }

  $sqlquery = "BEGIN;
    INSERT INTO Usuario (LoginS,Senha,Nome,Cpf) 
      VALUES ('$login','$senha','$nome','$cpf');
    INSERT INTO Telefone (CodUsu, NumTel)
      VALUES (LAST_INSERT_ID(), '$telefone');
    COMMIT;"
  ;

  

  if (mysqli_query($conn,$sqlquery) === TRUE) {
    echo "Successo!";
  } else {
    echo "Erro: " . $sql . $conn->error;
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
</body>

</html>