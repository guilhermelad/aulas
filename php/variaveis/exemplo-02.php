<?php

$anoNascimento = 1990;

$nomePrimeiro = "Guilherme";

$sobrenome = "Ladeira";

/* -----------Concatenar variáveis-------------*/

$nomeCompleto = $nomePrimeiro . " " . $sobrenome;

/*-----------------------------------------------*/


//teste de comentário

echo $nomeCompleto;
 
exit;

/* ----- Pular linha ----- */
echo "<br/>";
/*------------------------*/


unset($nomeCompleto);

/* isset validar se a variável não é nula  */


if (isset($nomeCompleto)){ 
    echo $nomeCompleto;
}

?>