<?php


function retornaFatorial($numero)
{
    $vetor = array();
    $n = $numero;
    $total = 1;

    while ($n > 1) {
        $total *= $n;
        $n--;
    }

    return $total;
}

function retornaArrayFatorial($numero)
{
    $vetor = array();
    do {
        $vetor[$numero] = retornaFatorial($numero);
        $numero--;
    } while ($numero != 0);

    for ($i = 1; $i <= count($vetor); $i++) {
        echo $i;
        echo '! = ';
        echo $vetor[$i];
        echo '<br>';
    }
}


echo retornaArrayFatorial(20);
