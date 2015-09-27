<?php

require 'controler/config/Connect.php';

$sql_update_workshop = "SELECT * FROM Atelier";

$sth=$db->query($sql_update_workshop);
$res=$sth>fetchAll(PDO::FETCH_ASSOC);

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


