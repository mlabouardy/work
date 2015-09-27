<?php

require 'controler/Functions.php';


if(isset($_GET['id'])){
	deleteWorkshop($id);
	header('Location: test.php');
  die();
}else{
	echo "this page doesnt exist";
}


?>
