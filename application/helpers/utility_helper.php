<?php

function asset_url(){
	return base_url().'assets/';
}

function json_encode_special_chars($array){
	//ejemplo de array : $array = array("Acceso Minusválidos", "Tienen 1 cuarto y un baño", "Cama Full o twin");
	return json_encode(array_map('utf8_encode', $array));
}

function json_decode_special_chars($string){	
	//Ejemplo de string : '["Acceso Minusv\u00e1lidos","Tienen 1 cuarto y un ba\u00f1o","Cama Full o twin"]'
	return json_decode(utf8_decode($string));	
}

?>
