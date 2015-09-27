<?php

require 'controler/config/Connect.php';

$sql_update_workshop = "SELECT * FROM Atelier";

$resultats=$db->query($sql_update_workshop);
$resultats->setFetchMode(PDO::FETCH_OBJ);

while( $resultat = $resultats->fetch() ){
	echo 'Utilisateur : '.$resultat->nom.'<br>';
}
$resultats->closeCursor();

echo "ok";
?>
<html>
	<head>
	
	</head>
	<body>
		okkkk;
	</body>
</html>


