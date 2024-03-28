<!---------------------------------------------------- 
Fichier:  TblGPhy.php 
Description : Transmission de donn�es (simulation)
Les valeurs contenues dans le fichier GrandeursPh.txt
sont plac�es dans les variables $Temp, $Lum et $Hum 
puis affich�es dans les cases d'un tableau.
------------------------------------------------------>

<html>

  <head>
	<title> Affichage de grandeurs physiques </title>
  </head>

<body>
<?php // Ouverture du fichier contenant les donn�es
	$FValeur = fopen("GrandeursPh.txt","r"); 
?>
  <div align="center">
	<p> Grandeurs physiques </p>
	<table border='1'>
		<tr>
			<td> Température =  </td>
			<td>
			<?php
				   $Temp = fgets($FValeur,10); // Lecture première valeur
				   echo "$Temp"; 
			?>	   
			</td>
			<td> °C </td>
			<td rowspan='2'>
			<?php
				   $Lum = fgets($FValeur,10); //Lecture deuxième valeur
				   if ($Lum == 0) echo "<img src=\"SoleilWeb.gif\"/>";
							 else echo "<img src=\"LuneWeb.gif\"/>"; 
			?>							 
			</td>
		</tr>
		<tr>
			<td> Humidité =  </td>
			<td> <?php 
					$Hum = fgets($FValeur,10); // Lecture troisième valeur
					echo "$Hum"; 
				?>
			</td>
			<td> % </td>
		</tr>
		<tr>
			<td> Vitesse Vent =  </td>
			<td>
			<?php
				   $VV = fgets($FValeur,10); // Lecture première valeur
				   echo "$VV"; 
			?>	   
			</td>
			<td> km/h </td>
	</table>
 </div> 
 <?php // Fermeture du fichier contenant les données
	fclose($FValeur); 
?> 

</body>

</html>