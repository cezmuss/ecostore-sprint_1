<html>
    <body>
        <?php require 'menu.php'; ?>
        <h1> Cadastro </h1>
            <div class="center">
                <form method="POST" action="cadastroExec.php">
                    <label>Login:</label><input type="text" name="login" id="login"><br>
                    <label>Senha:</label><input type="password" name="senha" id="senha"><br>
                    <label>Nome:</label><input type="text" name="nome" id="nome"><br>
                    <label>CPF:</label><input type="text" name="cpf" id="cpf"><br>
                    <label>Telefone:</label><input type="text" name="telefone"  id="telefone"><br>
                    <input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar">
                </form>
            </div><!--center-->
    </body>
</html>

