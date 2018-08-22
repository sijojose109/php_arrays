<?php
	$a_array = array('key1'=>'value1','key2'=>'value2','key3'=>'value3','key4'=>'value4','key5'=>'value5');
	print_r($a_array);
	echo '<br>';
	echo $a_array['key1'];
	foreach($a_array as $key => $value){
		echo '<br>';
		echo $key.'='.$value;
		echo "==============================";
	}
?>