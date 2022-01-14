<?php 
	$n=7;
	if(($n % 7==0) && ($n % 11!=0)){
		echo "Exactly divisible by 7";
	}
	elseif(($n % 11==0) && ($n % 7!=0)){
		echo "Exactly divisible by 11";
}
else{
	echo "Exactly none divisible";
}
?>