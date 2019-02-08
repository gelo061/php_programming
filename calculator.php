<?php 
	$num = $argv[1];
	$operator = $argv[1];
	$num1 = $argv[1];
	if ($argv[2] == "+"){
		echo $argv[1]+$argv[3];
	}
	else if ($argv[2] == "-"){
		echo $argv[1]-$argv[3];
	}
	else if ($argv[2] == "*"){
		echo $argv[1]*$argv[3];
	}
	else if ($argv[2] == "/"){
		echo $argv[1]/$argv[3];
	}
?>