<?php
  $array = array(10,11,23,657,888,797,55,5,6,2);
  $max = $array[0];
  foreach ($array as $key => $value) {
  	if ($max<$value) {
  		$max = $value;
  	}
  }
echo "Max value is".$max;
?>