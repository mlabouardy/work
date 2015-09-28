<?php

require 'controler/Functions.php';


if(isset($_GET['id'])){
	deleteWorkshop($id);
	header('Location: index.php');
  die();
}else{
	echo "this page doesnt exist";
}


?>
