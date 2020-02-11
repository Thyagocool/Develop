<?php 

if (!empty($_FILES['arquivo']['tmp_name'])){

	$dados = $_FILES['arquivo'];

	var_dump($dados);


}else{
	echo 'SELECIONE UM ARQUIVO!';
}


?>