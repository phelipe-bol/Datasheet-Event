<?php

function SeculoAno($ano){
    
    $seculoAtual = intval($ano) / 100;
    
    if (is_float($seculoAtual)) {
      $seculoAtual = intval($ano/100) + 1;
    }
    
    return 'século ' . $seculoAtual;
}

	
echo SeculoAno(1905);

?>