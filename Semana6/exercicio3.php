<?php

function retornaNumeroPerfeito($numero)
{
    $vetor = array();
    $dividendo = $numero / 2;
    $cont = 0;

    if ($numero % 2 == 0) {
        do {
            if ($numero % $dividendo == 0)
                $vetor[$cont++] = $dividendo;
            $dividendo--;
        } while ($dividendo != 0);

        $somatoria = 0;

        for ($i = 0; $i < count($vetor); $i++) {
            $somatoria += $vetor[$i];
        }

        if ($numero == $somatoria) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}

function retornaArrayNumeroPerfeito($numero)
{
    $vetor = array();
    $cont = 0;

    do {
        if (retornaNumeroPerfeito($numero))
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

echo retornaArrayNumeroPerfeito(10000);
