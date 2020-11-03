<?php

//Crie uma função recursiva para descobrir o menor número inteiro divisível por 2, 3 e 10 ao mesmo tempo. Quando encontrá-lo, imprima-o na tela.

function recursiva(){
	for ($i=0; $i <= 50; $i++) {
		if (($i % 2 == 0) && ($i % 3 == 0) && ($i % 10 == 0)){
			if($i!==0){
				echo "O número" . $i . " é divisível por 2, 3 e 10" . "<br>";
			}
		}
	}
}

recursiva();

?>