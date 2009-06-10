<?php
if ( function_exists('register_sidebar') )
register_sidebar(array(
'name'=>'dynamic',
'before_widget' => '<li class="sidebar_widget">',
'after_widget' => '</li>',
'before_title' => '<h4>',
'after_title' => '</h4>',
));

function textLimit($string, $length, $replacer = '...')
{
  if(strlen($string) > $length)
  return (preg_match('/^(.*)\W.*$/', substr($string, 0, $length+1), $matches) ? $matches[1] : substr($string, 0, $length)) . $replacer;
 
  return $string;
}

function crop_words ($string, $delimitador)
{
	// Separa a string em um array considerando somente as primeiras 55 posições
	// a 56 posição conterá o restante do texto.
	$array = split(" ", $string, 56);
	// Remove o ultimo elemento (restante do texto)
	array_pop($array);
	// Monta a string para retorno
	$result = implode(" ", $array) . " " . $delimitador;
	
	return $result;
}

//print(crop_words ($string, "leia mais"));


function page_excerpt ($page_id,$delimitador)
{
	$page = get_post($page_id, ARRAY_A);
	$string= $page['post_content'];
	// Separa a string em um array considerando somente as primeiras 55 posições
	// a 56 posição conterá o restante do texto.
	$array = split(" ", $string, 56);
	// Remove o ultimo elemento (restante do texto)
	array_pop($array);
	// Monta a string para retorno
	$result = implode(" ", $array) . " " . $delimitador;
	
	return $result;
}

//$version=page_excerpt(65,"...");
//				echo $version;
?>