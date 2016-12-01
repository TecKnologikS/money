<?php

include("src/Money.php");
include("src/Currency.php");
use SebastianBergmann\Money\Currency;
use SebastianBergmann\Money\Money;

if(isset($_GET["somme"]) && isset($_GET["curr"])) {
	$a = new Money(0, new Currency($_GET["curr"]));
	$array = explode(';' ,$_GET["somme"]);
	for ($i = 0; $i < count($array); $i++) {
		$array2 = explode(',' ,$array[$i]);
		$b = new Money(intval($array2[0]), new Currency($array2[1]));
		//echo $array2[0].' -> '.$array2[1].' <br />';
		$a = $a->add($b);
	}
	
	echo $a->getAmount();
}

?>