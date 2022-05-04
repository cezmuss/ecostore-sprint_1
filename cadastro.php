<html>

<head>
    <title> Cadastrar novo Usuário </title>
</head>

<body>
    <form action="cadastro_e.php" method="POST" onsubmit="return check(this.form)">
        <label>Login:</label><input type="text" name="login" id="login"><br>
        <label>Senha:</label><input type="password" name="senha" id="senha"><br>
        <label>Nome:</label><input type="text" name="nome" id="nome"><br>
        <label>Cpf:</label><input type="text" name="cpf" id="cpf"><br>
        <label>Telefone:</label><input type="text" name="telefone" id="telefone"><br>
        <input type="submit" value="Registrar">
    </form>
    
</body>

</html>
