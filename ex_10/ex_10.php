<?php
function my_get_arg(...$params)
{

$arrayName = array();
$a =count($params);
for ($i=0; $i < $a; $i++) {
  $arrayName=$params;

  // code...
}
return $arrayName;
}



//$w=implode(my_get_arg(2,3,4,"nitika","hi") );
//echo $w;

?>
