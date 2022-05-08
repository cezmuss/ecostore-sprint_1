<html>

<head>
    <title> Cadastro de usuário </title>
    <link href="css/style.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale+1.0">
</head>

<body>
    <?php require 'menu.php'; ?>
    <?php
        /* Conexão usando OOP do PHP */
        $conn = new mysqli("localhost", "root", "", "EcoStore");

        /* Checa conexão */
        if ($conn->connect_error) {
            die("Conexão Falhou: " . $conn->connect_error);
        }

        $sqlQuery = "SELECT Usuario.CodUsu, Usuario.LoginS, Usuario.Nome, Usuario.CPF, Telefone.NumTel
                    ";
        $result = $conn->query($sqlQuery);

        if ($result->num_rows > 0) {
            echo "
                <table> 

            ";
        }

        $conn->close();
    ?>
</body>

</html>