<html>
<head>
	<title> Contrôle à distance </title>
</head>

<body>
	<?php 
		if (($_GET["login"] == "Karmine") && ($_GET["motpasse"] == "Corp"))
			{ 
				header('Location: https://karminecorp.fr/');
			}
		else
				echo "Acces refusé";
	?>
</body>

</html>