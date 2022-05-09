<form method="POST" action="" style="padding: 0px 800px 0px;text-align:center;">
	<label for="ID">ID: </label><input type="text" name="ID" id="ID">
	<input type="submit" name="Deletar" value="Deletar">
</form>
<?php
	require 'connDB.php';

	$usuario = $_REQUEST['ID'];

	$sqlQuery = "BEGIN;
		DELETE FROM Telefone WHERE Telefone.CodUsu='$usuario';
		DELETE FROM Usuario WHERE Usuario.CodUsu='$usuario';
		COMMIT;"
	;

	if ($conn->multi_query($sqlQuery) === TRUE) {
		echo "Excluido!";
	}else{
		echo "Erro: " . $sqlquery . $conn->error;
	}
	$conn->close();
?>