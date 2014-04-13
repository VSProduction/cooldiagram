<?php

$array = glob('images/*.png');

if(isset($array['0'])) {
	$i = count($array) + 1;  
} 
else 
{
	$i=0; 
}
header('Content-Type: image/png');

$str = $_POST['a']; 

$str = preg_replace('/\s/', '+', $str); 


$str = substr($str,22); 
$str = base64_decode($str); 





$file = fopen('images/'.$i.'.png', 'x'); 

 $d = 'images/'.$i.'.png'; 


fwrite($file, $str); 
fclose($file); 

echo $d; 



?>


