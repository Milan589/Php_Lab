<?php 
	$per = 60;

	if($per >=80){
		echo "Distinction";

	}
	elseif(($per < 80) &&($per >=70)){
		echo "First Division";
	}
	elseif(($per < 70) &&($per >=55)){
		echo "Second Division";
	}
	elseif(($per < 55) &&($per >=35)){
		echo "Third Division";
	}
	else{
		echo "Fail";
	}

?>