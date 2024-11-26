<?php 

    require_once("function.php");

    define("notas", array(2, 3, 5, 6));
    define("frequencia", array(0,0,1,0,1,0,0,0,0,0));

    
    $mediaNotas = media();
    $statusNotas = statusNota();
    $frequencia = frequencia();
    $statusFrequencia = statusFrequencia();

    exibeMensagem("Média Notas: " . $mediaNotas . "<br>" . 
                  "Status Notas: " . $statusNotas . "<br>" .
                  "Frequencia: " . $frequencia . "<br>" .
                  "Status Frequencia: " . $statusFrequencia);

?>