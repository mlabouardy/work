<?php

require 'controler/config/Connect.php';

$sql_update_workshop = "SELECT * FROM Atelier";

$sth=$db->prepare($sql_update_workshop);
$sth->execute();

$res=$sth>fetchAll();

foreach($res as $r){
	echo $r->nom;
}
echo "ok";
?>
<html>
	<head>
	
	</head>
	<body>
		okkkk;
	</body>
</html>


