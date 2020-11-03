<?php

//Crie uma função recursiva para descobrir o menor número inteiro divisível por 2, 3 e 10 ao mesmo tempo. Quando encontrá-lo, imprima-o na tela.

function recursivoMdc($x,$y,$z){
	$a = max($x,$y,$z);
	$b = min($x,$y,$z);
	if($a%$b == 0){
		return $b;
	}else{
		return recursivoMdc($b,($a%$b));
	}
}

function recursivoMmc($x,$y,$z){
	return (($x*$y*$z)/(recursivoMdc($x,$y,$z)));
}

echo recursivoMmc(2,3,10);

?>