<?php
$servidor = "localhost:2380";
$usuario  = "root";
$senha    = "";
$banco = "db_madeira";

$conn     = mysqli_connect($servidor, $usuario, $senha,$banco);
if(!$conn){
    die( "erro ao conectar ao banco de dados!" .mysqli_connect_error());
}else{
	echo "Conectadooooooooooooooooooo"
}

?>