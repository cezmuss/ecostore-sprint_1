<html>

<body>
	<?php require 'menu.php'; ?>
	<br>
	<h1>Usuários</h1>
	<?php
	require 'connDB.php';

	$sqlQuery =
		"SELECT Usuario.CodUsu, Usuario.LoginS, Usuario.Nome, Usuario.CPF, Telefone.NumTel
			FROM Usuario INNER JOIN Telefone
			ON Usuario.CodUsu = Telefone.CodUsu;";

	if ($result = $conn->query($sqlQuery)) {
		echo "
				<table class='center' style='border-spacing: 5px; padding-left: 2px; padding-right: 2px;'>
						<tr>
							<th>ID</th>
							<th>Login</th>
							<th>Nome</th>
							<th>CPF</th>
							<th>Telefone</th>
						<tr>
				";
		if ($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {
				$field1name = $row["CodUsu"];
				$field2name = $row["LoginS"];
				$field3name = $row["Nome"];
				$field4name = $row["CPF"];
				$field5name = $row["NumTel"];

				echo '<tr> 
								<td>' . $field1name . '</td> 
								<td>' . $field2name . '</td> 
								<td>' . $field3name . '</td> 
								<td>' . $field4name . '</td> 
								<td>' . $field5name . '</td> 
							</tr>';
			}
		}
		echo "</table>";
	}

	$conn->close();
	?>
	<br>
	<?php include 'usuarioDel.php'; ?>

</body>

</html>