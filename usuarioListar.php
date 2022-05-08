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

	$sqlQuery = 
		"SELECT Usuario.CodUsu, Usuario.LoginS, Usuario.Nome, Usuario.CPF, Telefone.NumTel
		FROM Usuario INNER JOIN Telefone
		ON Usuario.CodUsu = Telefone.CodUsu;"
	;

	if ($result = $conn->query($sqlQuery)) {
		echo "
			<table>
					<tr>
						<th>ID</th>
						<th>Login</th>
						<th>Nome</th>
						<th>CPF</th>
						<th>Telefone</th>
					<tr>
			";
		if ($result->num_rows > 0){
			while ($row = $result->fetch_assoc()){
				$field1name = $row["CodUsu"];
				$field2name = $row["LoginS"];
				$field3name = $row["Nome"];
				$field4name = $row["CPF"];
				$field5name = $row["NumTel"];

				echo '<tr> 
							<td>'.$field1name.'</td> 
							<td>'.$field2name.'</td> 
							<td>'.$field3name.'</td> 
							<td>'.$field4name.'</td> 
							<td>'.$field5name.'</td> 
						</tr>'
					;
			}
		}
		echo "</table>";
	}

	$conn->close();
	?>
</body>

</html>