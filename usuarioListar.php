html>

<head>
    <title> Cadastro de usuário </title>
    <link href="css/style.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale+1.0">
</head>

<body>
    <div class="logo"><img src="images/logoo.png" width="100px" />
        <h2> Ecostore </h2>
    </div>
    <div class="menu">
        <a href="#">Home</a>
        <a href="#">Categorias</a>
        <a href="#">Ofertas</a>
        <a href="#">Cadastro</a>
        <a href="usuCad.php">Usuários Cadastrados</a>
    </div>
    <h1> Usuários Cadastrados</h1>
    <?php
        /* Conexão usando OOP do PHP */
        $conn = new mysqli("localhost", "root", "", "EcoStore");

        /* Checa conexão */
        if ($conn->connect_error) {
            die("Conexão Falhou: " . $conn->connect_error);
        }

        $sqlQuery = "";

        echo "
            <table> 

        ";

        $conn->close();
    ?>
</body>

</html>