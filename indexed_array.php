<?php
	$i_arrary = array(value1,value2,value3,value4,value5);
	print_r($i_arrary);
	echo '<br>';
	echo $i_arrary[1];
	echo '<br>';
	$i = 0;
	foreach($i_arrary as $i_arrarys){
		echo "<br>";
		echo $i_arrary[$i];
		$i++;
	}
?>