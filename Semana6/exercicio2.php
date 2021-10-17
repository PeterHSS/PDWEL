<?php


function retornaArrayPrimo($numero)
{
    $vetor = array();
    $cont = 0;

    do {
        if (retornaPrimo($numero))
            $vetor[$cont++] = $numero;
        $numero--;
    } while ($numero != 0);

    echo '[ ';

    for ($i = 0; $i < count($vetor); $i++) {
        echo $vetor[$i];
        echo ' ';
    }

    echo ']';
}

function retornaPrimo($numero)
{

    $cont = 0;
    $dividisor = $numero;

    do {
        $resultado = $numero % $dividisor;
        if ($resultado == 0) {
            $cont++;
        }
        $dividisor--;
    } while ($dividisor != 0);


    if ($cont < 3)
        return true;
    else
        return false;
}

echo retornaArrayPrimo(11);
