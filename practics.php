<?php
 
 $x = "BLUE";

 switch ($x) {
 	case 'RED':
 		echo "your favourite color is ".$x;
 		break;

 	case 'BLUE':
 		echo "your favourite color is ".$x;
 		break;
 	
 	default:
 		echo "Your favourite color is neither red nor blue";
 		break;
 }

$age = array("Peter"=>24,"Mamoon"=>32);
echo $age["Peter"];

$a = json_encode($age);
$y = json_decode($a);

echo $y->Mamoon;


