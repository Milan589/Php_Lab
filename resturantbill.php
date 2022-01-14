<?php
	$ham_rate = 4.95;
	$qty= 2;
	$cho_rate = 1.95;
	$qty2=1;
	$cola_rate = 0.85;
	$qty3 =1;
	$tax_rate =0.075;
	$tip_rate = 0.16;

	$subtotal =$ham_rate *$qty + $cho_rate*$qty2 +$cola_rate*$qty3;
	$tax=$subtotal *$tax_rate;
	$tip_tax =$subtotal * $tip_rate;
	$total = $subtotal + $tax + $tip_tax;
	
	echo " Items" . " Quantity"."Rate"."<br>";
	echo "Hamburger "." ".$qty." " .$ham_rate."<br>";
	echo "Chocolate "." ".$qty2." " .$cho_rate."<br>";
	echo "Cola "." ".$qty3." " .$cola_rate."<br>";
	echo "Subtotal= "." ".$subtotal."<br>";
	echo "With Tax= "." ".$tax."<br>";
	echo "With Tips Tax= "." ".$tip_tax."<br>";
	
	echo "GrandTotal is "." ".$total."<br>"; 

?>