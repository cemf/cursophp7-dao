<?php

require_once("config.php");


$root = new Usuario();

$root->loadById(3);
		echo $root;

// for($x=0;$x<=10;$x++){
	
	
// 	echo $x;	

// 	try {
// 		
// 	} catch (Exception $e) {
// 		echo "afs $e";
// 	}
// }


// echo $root."<br/>";

// $teste = new Usuario();

// $teste->loadById(1);

// echo $teste."<br/>";


// $sql= new Sql();

// $usuarios = $sql ->select("SELECT * FROM tb_usuarios");

// echo json_encode($usuarios);




?>