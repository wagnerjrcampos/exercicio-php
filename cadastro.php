<?php
	$titulo
?>

<html>
<head>
		<title><?php echo $titulo; ?></title>
		<meta charset="utf-8" />
</head>
<body>
	<h1>cadastro</h1>
	<form method="post" action="cadastro.php">
		<label>E-mail</form>
		<input type="submit" value="cadastra" name="email" id="email" />
		<br />
		<input type="submit" value="Cadastrar" name="email" id="email" />
	</form>
	
	<?php
		if($_POST && !empty($_POST['email'])){
			echo "Cadastrado com sucesso";
		}
	?>
</body>
</html>	